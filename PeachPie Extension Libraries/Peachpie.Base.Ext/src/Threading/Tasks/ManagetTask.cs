using System;
using System.Collections.Generic;
using System.Threading;
using System.Threading.Tasks;
using Pchp.Core;
using Exception = Pchp.Library.Spl.Exception;

namespace Php.Threading.Tasks
{
    public class ManagedTask : IDisposable
    {
        // Получает уникальный идентификатор задачи. / Gets the unique task identifier.
        public int Id => _task?.Id ?? -1;

        // Получает текущий статус задачи. / Gets the current status of the task.
        public TaskStatus Status => _task?.Status ?? TaskStatus.Created;

        // Указывает, завершена ли задача. / Indicates whether the task has completed.
        public bool IsCompleted => _task?.IsCompleted ?? false;

        // Указывает, была ли задача отменена. / Indicates whether the task was canceled.
        public bool IsCanceled => _task?.IsCanceled ?? false;

        // Указывает, завершена ли задача успешно. / Indicates whether the task completed successfully.
        public bool IsCompletedSuccessfully => _task?.IsCompletedSuccessfully ?? false;

        // Указывает, произошла ли ошибка в задаче. / Indicates whether the task has faulted.
        public bool IsFaulted => _task?.IsFaulted ?? false;

        // Указывает, приостановлена ли задача. / Indicates whether the task is paused.
        public bool IsPaused => _isPaused;

        // Указывает, запущена ли задача. / Indicates whether the task has started.
        public bool IsStarted => _isStarted;

        // Событие, возникающее при завершении задачи. / Event that occurs when the task is completed.
        public event EventHandler<ManagedTaskEventArgs> Completed;

        private CancellationTokenSource _cancellationTokenSource;
        private AutoResetEvent _pauseEvent;
        private Context _ctx;
        private IPhpCallable _action;
        private Task<object> _task;
        private bool _isStarted;
        private bool _isPaused;
        private ManagedTaskCreationOptions _options;
        
        // Конструктор, инициализирующий новый экземпляр класса ManagedTask. / Constructor that initializes a new instance of the ManagedTask class.
        public ManagedTask(Context ctx, IPhpCallable callable, ManagedTaskCreationOptions options = ManagedTaskCreationOptions.None)
        {
            _ctx = ctx ?? throw new ArgumentNullException(nameof(ctx));
            _action = callable ?? throw new ArgumentNullException(nameof(callable), "Callable cannot be null.");
            _cancellationTokenSource = new CancellationTokenSource();
            _pauseEvent = new AutoResetEvent(true);
            _isStarted = false;
            _isPaused = false;
            _options = options;
            _task = CreateNewTask();
        }

        // Создает новую задачу. / Creates a new task.
        private Task<object> CreateNewTask()
        {
            return new Task<object>(() =>
            {
                try
                {
                    var result = InnerInvoke();
                    OnCompleted(new ManagedTaskEventArgs(Id, result));
                    return result;
                }
                catch (ManagedTaskException ex)
                {
                    OnCompleted(new ManagedTaskEventArgs(Id, ex));
                    throw;
                }
            }, _cancellationTokenSource.Token, (TaskCreationOptions)_options);
        }

        // Внутренний метод для вызова действия задачи. / Internal method to invoke the task action.
        private object InnerInvoke()
        {
            try
            {
                return _action.Invoke(_ctx, PhpValue.FromClass(_cancellationTokenSource.Token),
                    PhpValue.FromClass(_pauseEvent)).ToClr();
            }
            catch (OperationCanceledException)
            {
                // Обработка отмены. / Handle cancellation.
                throw new ManagedTaskException("Task was cancelled.");
            }
            catch (Exception ex)
            {
                // Выбрасывает ManagedTaskException для указания критической ошибки. / Throw a ManagedTaskException to indicate a critical error.
                throw new ManagedTaskException($"Critical error in ManagedTask {Id}: {ex.Message}", ex.HResult);
            }
        }

        // Метод, вызываемый при завершении задачи. / Method called when the task is completed.
        protected virtual void OnCompleted(ManagedTaskEventArgs e)
        {
            Completed?.Invoke(this, e);
        }

        // Запускает задачу. / Starts the task.
        public void Start()
        {
            if (_isStarted && _task.Status == TaskStatus.Running)
            {
                throw new ManagedTaskException("ManagedTask already started.");
            }

            if (_task.Status == TaskStatus.Created)
            {
                _task.Start();
            }
            else if (_task.Status == TaskStatus.Canceled || _task.Status == TaskStatus.Faulted ||
                     _task.Status == TaskStatus.RanToCompletion)
            {
                RestartTask();
            }

            _isStarted = true;
        }

        // Статический метод для создания и запуска новой задачи. / Static method to create and start a new task.
        public static ManagedTask Run(Context ctx, IPhpCallable callable, ManagedTaskCreationOptions options = ManagedTaskCreationOptions.None)
        {
            if (callable == null) throw new ArgumentNullException(nameof(callable), "Callable cannot be null.");

            var managedTask = new ManagedTask(ctx, callable, options);
            managedTask.Start();
            return managedTask;
        }

        // Перезапускает задачу. / Restarts the task.
        private void RestartTask()
        {
            _cancellationTokenSource.Dispose();
            _pauseEvent.Dispose();
            _cancellationTokenSource = new CancellationTokenSource();
            _pauseEvent = new AutoResetEvent(true);
            _task = CreateNewTask();
            _task.Start();
        }

        // Приостанавливает задачу. / Pauses the task.
        public void Pause()
        {
            _pauseEvent.Reset();
            _isPaused = true;
        }

        // Возобновляет задачу. / Resumes the task.
        public void Resume()
        {
            _pauseEvent.Set();
            _isPaused = false;
        }

        // Останавливает задачу. / Stops the task.
        public void Stop()
        {
            _cancellationTokenSource.Cancel();
            _pauseEvent.Set();
            _isStarted = false;
            _isPaused = false;
        }

        // Ожидает завершения задачи. / Waits for the task to complete.
        public void Wait()
        {
            _task.Wait();
        }
        
        // Ожидает завершения всех переданных задач. / Waits for all the provided tasks to complete.
        public static void WaitAll(PhpArray managedTasks)
        {
            if (managedTasks == null) throw new ArgumentNullException(nameof(managedTasks), "Managed tasks array cannot be null.");

            var tasks = new List<Task>();

            foreach (var item in managedTasks.Values)
            {
                if (item.AsObject() is ManagedTask managedTask)
                {
                    tasks.Add(managedTask._task);
                }
                else
                {
                    throw new ArgumentException("All elements in the array must be of type ManagedTask.");
                }
            }

            Task.WaitAll(tasks.ToArray());
        }
        
        // Ожидает завершения любой из переданных задач. / Waits for any of the provided tasks to complete.
        public static int WaitAny(PhpArray managedTasks)
        {
            if (managedTasks == null) throw new ArgumentNullException(nameof(managedTasks), "Managed tasks array cannot be null.");

            var tasks = new List<Task>();

            foreach (var item in managedTasks.Values)
            {
                if (item.AsObject() is ManagedTask managedTask)
                {
                    tasks.Add(managedTask._task);
                }
                else
                {
                    throw new ArgumentException("All elements in the array must be of type ManagedTask.");
                }
            }

            return Task.WaitAny(tasks.ToArray());
        }

        // Получает результат задачи синхронно. / Gets the task result synchronously.
        public object GetResultSync()
        {
            return _task.Result;
        }

        // Создает задачу-продолжение. / Creates a continuation task.
        public ManagedTask ContinueWith(IPhpCallable continuationAction, ManagedTaskCreationOptions options = ManagedTaskCreationOptions.None)
        {
            if (continuationAction == null) throw new ArgumentNullException(nameof(continuationAction), "Callable cannot be null.");

            var continuationTask = _task.ContinueWith(prevTask =>
            {
                var result = continuationAction.Invoke(_ctx, PhpValue.FromClass(_cancellationTokenSource.Token),
                    PhpValue.FromClass(_pauseEvent), PhpValue.FromClr(prevTask.Result)).ToClr();
                return result;
            }, _cancellationTokenSource.Token, (TaskContinuationOptions)options , TaskScheduler.Current);

            return new ManagedTask(_ctx, continuationAction, options)
            {
                _task = continuationTask,
                _cancellationTokenSource = new CancellationTokenSource(),
                _pauseEvent = new AutoResetEvent(true)
            };
        }

        // Освобождает задачу и её ресурсы. / Disposes the task and its resources.
        public void Dispose()
        {
            _task?.Dispose();
            _cancellationTokenSource.Dispose();
            _pauseEvent.Dispose();
        }
    }
}
