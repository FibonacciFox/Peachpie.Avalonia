using System;
using System.Collections.Concurrent;
using System.Threading;
using Pchp.Core;
using Pchp.Library.Spl;
using Exception = Pchp.Library.Spl.Exception;

namespace Peachpie.Community.Threading
{
    public class Timer : IDisposable
    {
        private readonly Context _ctx;
        private readonly IPhpCallable _callback;
        private System.Threading.Timer _timer;
        private int _dueTime;
        private int _period;
        private bool _isDisposed;
        private static readonly ConcurrentBag<Timer> _activeTimers = new ConcurrentBag<Timer>();

        // Свойства для определения состояния таймера / Properties to determine the state of the timer
        public bool isRunning => _timer != null && !_isDisposed;
        public bool isDisposed => _isDisposed;

        // Конструктор таймера / Timer constructor
        private Timer(Context ctx, IPhpCallable callback, int dueTime, int period)
        {
            _ctx = ctx;
            _callback = callback;
            _dueTime = dueTime;
            _period = period;
            _isDisposed = false;
            _timer = new System.Threading.Timer(TimerCallback, null, Timeout.Infinite, Timeout.Infinite);
            _activeTimers.Add(this);
        }

        // Обратный вызов таймера / Timer callback
        private void TimerCallback(object state)
        {
            try
            {
                _callback.Invoke(_ctx);
            }
            catch (Exception ex)
            {
                // Используем исключение из пространства имен Pchp.Library.Spl / Use exception from Pchp.Library.Spl namespace
                throw new RuntimeException($"Timer callback error: {ex.Message}");
            }
        }

        // Метод для изменения времени таймера / Method to change the timer's due time and period
        public void Change(int dueTime, int period)
        {
            if (_isDisposed)
            {
                throw new InvalidOperationException("Cannot change a disposed timer.");
            }

            _dueTime = dueTime;
            _period = period;
            _timer.Change(dueTime, period);
        }

        // Метод для отмены таймера / Method to cancel the timer
        public void Cancel()
        {
            _timer?.Dispose();
            _timer = null;
            _isDisposed = true;
            _activeTimers.TryTake(out _);
        }

        // Метод для немедленного запуска таймера / Method to immediately run the timer
        public void Run()
        {
            _timer?.Change(0, Timeout.Infinite);
        }

        // Метод для остановки таймера / Method to stop the timer
        public void Stop()
        {
            _timer?.Change(Timeout.Infinite, Timeout.Infinite);
        }

        // Метод для перезапуска таймера / Method to restart the timer
        public void Restart()
        {
            _timer?.Change(_dueTime, _period);
        }

        // Метод для создания таймера с задержкой / Method to create a timer with delay
        public static Timer SetTimeout(Context ctx, IPhpCallable callback, int milliseconds)
        {
            var timer = new Timer(ctx, callback, milliseconds, Timeout.Infinite);
            timer._timer.Change(milliseconds, Timeout.Infinite);
            return timer;
        }

        // Метод для создания интервала таймера / Method to create an interval timer
        public static Timer SetInterval(Context ctx, IPhpCallable callback, int milliseconds)
        {
            var timer = new Timer(ctx, callback, milliseconds, milliseconds);
            timer._timer.Change(milliseconds, milliseconds);
            return timer;
        }

        // Метод для создания таймера после заданного периода / Method to create a timer after a given period
        public static Timer After(Context ctx, string period, IPhpCallable callback)
        {
            return SetTimeout(ctx, callback, ParsePeriod(period));
        }

        // Метод для создания таймера, выполняющегося через регулярные интервалы / Method to create a timer that runs at regular intervals
        public static Timer Every(Context ctx, string period, IPhpCallable callback)
        {
            return SetInterval(ctx, callback, ParsePeriod(period));
        }

        // Метод для создания таймера с условием / Method to create a conditional timer
        public static Timer Trigger(Context ctx, IPhpCallable condition, IPhpCallable callback, int checkPeriod)
        {
            var timer = new Timer(ctx, callback, 0, checkPeriod);
            timer._timer = new System.Threading.Timer(_ =>
            {
                if (condition.Invoke(ctx).ToBoolean())
                {
                    callback.Invoke(ctx);
                    timer.Cancel();
                }
            }, null, 0, checkPeriod);
            return timer;
        }

        // Метод для приостановки выполнения на заданный период / Method to sleep for a given period
        public static void Sleep(string period)
        {
            Thread.Sleep(ParsePeriod(period));
        }

        // Метод для разбора строкового периода в миллисекунды / Method to parse a period string into milliseconds
        public static int ParsePeriod(string period)
        {
            if (string.IsNullOrWhiteSpace(period))
                throw new ArgumentException("Period is empty or null.");

            int milliseconds = 0;
            foreach (var part in period.Split(new[] { ' ', '\t' }, StringSplitOptions.RemoveEmptyEntries))
            {
                int length = part.Length;
                char lastChar = part[length - 1];
                int factor = lastChar switch
                {
                    's' => 1000,
                    'm' => 1000 * 60,
                    'h' => 1000 * 60 * 60,
                    'd' => 1000 * 60 * 60 * 24,
                    _ => char.IsDigit(lastChar) ? 1 : throw new ArgumentException($"Invalid time unit '{lastChar}' in period.")
                };

                string number = char.IsDigit(lastChar) ? part : part.Substring(0, length - 1);
                if (!double.TryParse(number, out double num))
                    throw new ArgumentException($"Invalid number '{number}' in period.");

                milliseconds += (int)(num * factor);
            }

            return milliseconds;
        }

        // Метод для отмены всех активных таймеров / Method to cancel all active timers
        public static void CancelAll()
        {
            foreach (var timer in _activeTimers)
            {
                timer.Cancel();
            }
        }

        // Метод для освобождения ресурсов / Method to release resources
        public void Dispose()
        {
            Cancel();
        }
    }
}
