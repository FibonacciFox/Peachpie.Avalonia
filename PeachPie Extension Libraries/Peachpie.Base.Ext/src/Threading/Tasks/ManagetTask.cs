
using System;
using System.Threading;
using System.Threading.Tasks;
using Pchp.Core;

namespace Php.Threading.Tasks
{
    public class ManagedTask : IDisposable
    {
        public int Id => _task?.Id ?? -1;
        public TaskStatus Status => _task?.Status ?? TaskStatus.Created;
        public bool IsCompleted => _task?.IsCompleted ?? false;
        public bool IsCanceled => _task?.IsCanceled ?? false;
        public bool IsCompletedSuccessfully => _task?.IsCompletedSuccessfully ?? false;
        public bool IsFaulted => _task?.IsFaulted ?? false;
        public bool IsPaused => _isPaused;
        public bool IsStarted => _isStarted;

        public event EventHandler<TaskCompletedEventArgs> TaskCompleted;

        private CancellationTokenSource _cancellationTokenSource;
        private AutoResetEvent _pauseEvent;
        private Context _ctx;
        private IPhpCallable _action;
        private Task _task;
        private bool _isStarted;
        private bool _isPaused;

        public ManagedTask(Context ctx, IPhpCallable callable)
        {
            _ctx = ctx ?? throw new ArgumentNullException(nameof(ctx));
            _action = callable ?? throw new ArgumentNullException(nameof(callable));
            _cancellationTokenSource = new CancellationTokenSource();
            _pauseEvent = new AutoResetEvent(true);
            _isStarted = false;
            _isPaused = false;
            _task = CreateNewTask();
        }

        private Task CreateNewTask()
        {
            return new Task(() => 
            {
                var result = InnerInvoke();
                OnTaskCompleted(new TaskCompletedEventArgs(Id, result));
            }, _cancellationTokenSource.Token, TaskCreationOptions.LongRunning);
        }

        private object InnerInvoke()
        {
            try
            {
                return _action.Invoke(_ctx, PhpValue.FromClass(_cancellationTokenSource.Token), PhpValue.FromClass(_pauseEvent)).ToClr();
            }
            catch (OperationCanceledException)
            {
                // Handle cancellation
                return null;
            }
            catch (Exception ex)
            {
                // Log the critical error and rethrow the exception to crash the program
                Console.Error.WriteLine($"Critical error in task {Id}: {ex.Message} - {ex.HelpLink}");
                throw;
            }
        }

        protected virtual void OnTaskCompleted(TaskCompletedEventArgs e)
        {
            TaskCompleted?.Invoke(this, e);
        }

        public void Start()
        {
            if (_isStarted && _task.Status == TaskStatus.Running)
            {
                throw new TaskAlreadyStartedException();
            }

            if (_task.Status == TaskStatus.Created)
            {
                _task.Start();
            }
            else if (_task.Status == TaskStatus.Canceled || _task.Status == TaskStatus.Faulted || _task.Status == TaskStatus.RanToCompletion)
            {
                RestartTask();
            }

            _isStarted = true;
        }

        private void RestartTask()
        {
            _cancellationTokenSource.Dispose();
            _cancellationTokenSource = new CancellationTokenSource();
            _task = CreateNewTask();
            _task.Start();
        }

        public void Pause()
        {
            _pauseEvent.Reset();
            _isPaused = true;
        }

        public void Resume()
        {
            _pauseEvent.Set();
            _isPaused = false;
        }

        public void Stop()
        {
            _cancellationTokenSource.Cancel();
            _pauseEvent.Set();
            _isStarted = false;
            _isPaused = false;
        }

        public void Dispose()
        {
            _task?.Dispose();
            _cancellationTokenSource.Dispose();
            _pauseEvent.Dispose();
        }
    }
}