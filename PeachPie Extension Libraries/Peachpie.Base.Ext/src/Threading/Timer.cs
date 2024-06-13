using System;
using System.Collections.Concurrent;
using System.Threading;
using Pchp.Core;

namespace Php.Threading
{
    public class Timer : IDisposable
    {
        private Context _ctx;
        private System.Threading.Timer _timer;
        private DateTime _scheduledTime;
        private static readonly ConcurrentBag<Timer> _activeTimers = new ConcurrentBag<Timer>();

        public Timer(Context ctx)
        {
            _ctx = ctx;
            _activeTimers.Add(this);
        }

        private void TimerCallback(object state)
        {
            IPhpCallable callback = (IPhpCallable)state;
            try
            {
                callback.Invoke(_ctx);
            }
            catch (Exception ex)
            {
                Console.WriteLine($"Timer callback error: {ex.Message}");
            }
        }

        public void Cancel()
        {
            _timer?.Dispose();
            _timer = null;

            if (_activeTimers.TryTake(out var removedTimer))
            {
                // Таймер успешно удален из активных таймеров
            }
        }

        public void Run()
        {
            _timer?.Change(0, Timeout.Infinite);
        }

        public long ScheduledTime()
        {
            return (long)(_scheduledTime - DateTime.UtcNow).TotalMilliseconds;
        }

        public static Timer SetTimeout(Context ctx, IPhpCallable callback, int milliseconds)
        {
            var timer = new Timer(ctx);
            timer._timer = new System.Threading.Timer(_ =>
            {
                try
                {
                    callback.Invoke(ctx);
                }
                finally
                {
                    timer.Cancel();
                }
            }, callback, milliseconds, Timeout.Infinite);
            timer._scheduledTime = DateTime.UtcNow.AddMilliseconds(milliseconds);
            return timer;
        }

        public static Timer SetInterval(Context ctx, IPhpCallable callback, int milliseconds)
        {
            var timer = new Timer(ctx);
            timer._timer = new System.Threading.Timer(_ =>
            {
                callback.Invoke(ctx);
            }, callback, milliseconds, milliseconds);
            timer._scheduledTime = DateTime.UtcNow.AddMilliseconds(milliseconds);
            return timer;
        }

        public static Timer After(Context ctx, string period, IPhpCallable callback)
        {
            int milliseconds = ParsePeriod(period);
            return SetTimeout(ctx, callback, milliseconds);
        }

        public static Timer Every(Context ctx, string period, IPhpCallable callback)
        {
            int milliseconds = ParsePeriod(period);
            return SetInterval(ctx, callback, milliseconds);
        }

        public static Timer Trigger(Context ctx, IPhpCallable condition, IPhpCallable callback, int checkPeriod)
        {
            var timer = new Timer(ctx);
            timer._timer = new System.Threading.Timer(_ =>
            {
                if (condition.Invoke(ctx).ToBoolean())
                {
                    callback.Invoke(ctx);
                    timer.Cancel();
                }
            }, condition, 0, checkPeriod);
            timer._scheduledTime = DateTime.UtcNow.AddMilliseconds(checkPeriod);
            return timer;
        }

        public static void Sleep(string period)
        {
            int milliseconds = ParsePeriod(period);
            Thread.Sleep(milliseconds);
        }

        public static int ParsePeriod(string period)
        {
            if (string.IsNullOrWhiteSpace(period))
            {
                throw new ArgumentException("Period is empty or null.");
            }

            int milliseconds = 0;
            string[] parts = period.Split(new char[] { ' ', '\t' }, StringSplitOptions.RemoveEmptyEntries);

            foreach (string part in parts)
            {
                int length = part.Length;
                char lastChar = part[length - 1];
                int factor = 1;

                switch (lastChar)
                {
                    case 's': factor = 1000; break;
                    case 'm': factor = 1000 * 60; break;
                    case 'h': factor = 1000 * 60 * 60; break;
                    case 'd': factor = 1000 * 60 * 60 * 24; break;
                    default:
                        if (!char.IsDigit(lastChar))
                            throw new ArgumentException($"Invalid time unit '{lastChar}' in period.");
                        break;
                }

                string number = char.IsDigit(lastChar) ? part : part.Substring(0, length - 1);
                if (!double.TryParse(number, out double num))
                {
                    throw new ArgumentException($"Invalid number '{number}' in period.");
                }
                milliseconds += (int)(num * factor);
            }

            return milliseconds;
        }

        public static void CancelAll()
        {
            foreach (var timer in _activeTimers)
            {
                timer.Cancel();
            }
        }

        public void Dispose()
        {
            Cancel();
        }
    }
}
