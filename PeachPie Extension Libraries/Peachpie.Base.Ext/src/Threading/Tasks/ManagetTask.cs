using System;
using System.Threading;
using System.Threading.Tasks;

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

        public ManagedTask(Action<CancellationToken, AutoResetEvent> action)
        {
            _action = action;
            _cancellationTokenSource = new CancellationTokenSource();
            _pauseEvent = new AutoResetEvent(true);
            _isStarted = false;
            _task = CreateNewTask(); 
        }

        private Task CreateNewTask()
        {
            return new Task(() => InnerInvoke(), _cancellationTokenSource.Token, TaskCreationOptions.LongRunning);
        }

        private void InnerInvoke()
        {
            try
            {
                _action(_cancellationTokenSource.Token, _pauseEvent);
            }
            catch (OperationCanceledException)
            {
                // Handle cancellation
            }
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
                _cancellationTokenSource = new CancellationTokenSource();
                _task = CreateNewTask();
                _task.Start();
            }

            _isStarted = true;
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

        private CancellationTokenSource _cancellationTokenSource;
        private AutoResetEvent _pauseEvent;
        private Action<CancellationToken, AutoResetEvent> _action;
        private Task _task;
        private bool _isStarted;
        private bool _isPaused;
    }
}
