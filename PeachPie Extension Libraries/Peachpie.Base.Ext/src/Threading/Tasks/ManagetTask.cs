using System;
using System.Threading;
using System.Threading.Tasks;
using Pchp.Core;
using Exception = Pchp.Library.Spl.Exception;

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

        public event EventHandler<ManagedTaskEventArgs> Completed;

        private CancellationTokenSource _cancellationTokenSource;
        private AutoResetEvent _pauseEvent;
        private Context _ctx;
        private IPhpCallable _action;
        private Task<object> _task;
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
            }, _cancellationTokenSource.Token, TaskCreationOptions.LongRunning);
        }
        
        private object InnerInvoke()
        {
            try
            {
                return _action.Invoke(_ctx, PhpValue.FromClass(_cancellationTokenSource.Token),
                    PhpValue.FromClass(_pauseEvent)).ToClr();
            }
            catch (OperationCanceledException)
            {
                // Handle cancellation
                throw new ManagedTaskException("Task was cancelled.");
            }
            catch (Exception ex)
            {
                // Throw a ManagedTaskException to indicate a critical error
                throw new ManagedTaskException($"Critical error in ManagedTask {Id}: {ex.Message}", ex.HResult);
            }
        }


        protected virtual void OnCompleted(ManagedTaskEventArgs e)
        {
            Completed?.Invoke(this, e);
        }

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

        private void RestartTask()
        {
            _cancellationTokenSource.Dispose();
            _pauseEvent.Dispose();
            _cancellationTokenSource = new CancellationTokenSource();
            _pauseEvent = new AutoResetEvent(true);
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

        public void Wait()
        {
            _task.Wait();
        }

        public object GetResultSync()
        {
            return _task.Result;
        }

        public ManagedTask ContinueWith(IPhpCallable continuationAction)
        {
            var continuationTask = _task.ContinueWith(prevTask =>
            {
                var result = continuationAction.Invoke(_ctx, PhpValue.FromClass(_cancellationTokenSource.Token),
                    PhpValue.FromClass(_pauseEvent), PhpValue.FromClr(prevTask.Result)).ToClr();
                return result;
            }, _cancellationTokenSource.Token, TaskContinuationOptions.LongRunning, TaskScheduler.Current);

            return new ManagedTask(_ctx, continuationAction)
            {
                _task = continuationTask,
                _cancellationTokenSource = new CancellationTokenSource(),
                _pauseEvent = new AutoResetEvent(true)
            };
        }

        public void Dispose()
        {
            _task?.Dispose();
            _cancellationTokenSource.Dispose();
            _pauseEvent.Dispose();
        }
    }
}