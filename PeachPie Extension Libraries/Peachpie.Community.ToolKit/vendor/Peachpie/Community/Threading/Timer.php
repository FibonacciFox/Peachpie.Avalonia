<?php

namespace Peachpie\Community\Threading;

class Timer
{
    /**
     * Конструктор таймера / Timer constructor.
     */
    protected function __construct()
    {
    }

    /**
     * Выполнить один раз после указанного периода в формате:
     * '' - миллисекунды
     * 's' - секунды
     * 'm' - минуты
     * 'h' - часы
     * 'd' - дни (24 часа)
     *
     * например '2h 30m 10s' или '2.5s' или '2000' или '1m 30s'
     *
     * Run once after the period in format:
     * '' - millis
     * 's' - seconds
     * 'm' - minutes
     * 'h' - hours
     * 'd' - days (24 hours)
     *
     * for example '2h 30m 10s' or '2.5s' or '2000' or '1m 30s'
     *
     * @param string $period
     * @param callable $callback
     * @return Timer
     */
    static function after(string $period, callable $callback): Timer
    {
    }

    /**
     * Выполнять каждый раз с указанным периодом как в методе after().
     *
     * Run every time based on the period as in after() method.
     *
     * @param string $period
     * @param callable $callback
     * @return Timer
     */
    static function every(string $period, callable $callback): Timer
    {
    }

    /**
     * Создать триггерный таймер, который сработает, когда триггерный callback вернет true.
     *
     * Create trigger timer which will call when trigger callback returns true.
     *
     * @param callable $trigger (): bool
     * @param callable $callback
     * @param int $checkPeriod Time period of checking trigger (default 1/60 sec).
     * @return Timer
     */
    static function trigger(callable $trigger, callable $callback, int $checkPeriod = 16): Timer
    {
    }

    /**
     * Как в JS.
     *
     * Like in JS.
     *
     * @param callable $taskCallback
     * @param int $millis Delay period in millis.
     * @return Timer
     */
    static function setTimeout(callable $taskCallback, int $millis): Timer
    {
    }

    /**
     * Как в JS.
     *
     * Like in JS.
     *
     * @param callable $taskCallback
     * @param int $millis
     * @return Timer
     */
    static function setInterval(callable $taskCallback, int $millis): Timer
    {
    }

    /**
     * Задержка выполнения на указанный период.
     *
     * Sleep period time.
     *
     * @param string $period
     */
    static function sleep(string $period)
    {
    }

    /**
     * Отменить все запланированные задачи таймера.
     *
     * Call all timer tasks which scheduled.
     */
    static function cancelAll()
    {
    }

    /**
     * Завершить все таймеры и систему таймеров!
     *
     * Shutdown all timers and timer system!
     */
    static function shutdownAll()
    {
    }

    /**
     * Преобразует строковый период в количество миллисекунд.
     *
     * Converts a string period to amount of millis.
     *
     * '' - миллисекунды
     * 's' - секунды
     * 'm' - минуты
     * 'h' - часы
     * 'd' - дни (24 часа)
     *
     * например '2h 30m 10s' или '2.5s' или '2000' или '1m 30s'
     *
     * '' - millis
     * 's' - seconds
     * 'm' - minutes
     * 'h' - hours
     * 'd' - days (24 hours)
     *
     * for example '2h 30m 10s' or '2.5s' or '2000' or '1m 30s'
     *
     * @param string $value
     * @return int
     */
    static function parsePeriod(string $value): int
    {
    }

    /**
     * Отменить задачу таймера.
     *
     * Cancel timer task.
     */
    function cancel()
    {
    }

    /**
     * Немедленно запустить задачу таймера.
     *
     * Run timer task immediately.
     */
    function run()
    {
    }

    /**
     * Остановить задачу таймера.
     *
     * Stop timer task.
     */
    function stop()
    {
    }

    /**
     * Перезапустить задачу таймера.
     *
     * Restart timer task.
     */
    function restart()
    {
    }

    /**
     * Изменить время задержки и период таймера.
     *
     * Change the timer's due time and period.
     *
     * @param int $dueTime Время задержки в миллисекундах / Due time in milliseconds
     * @param int $period Период в миллисекундах / Period in milliseconds
     */
    function change(int $dueTime, int $period)
    {
    }

    /**
     * Возвращает true, если таймер запущен, false если остановлен.
     *
     * Returns true if the timer is running, false if stopped.
     *
     * @var bool
     */
    public bool $isRunning;

    /**
     * Возвращает true, если таймер удален.
     *
     * Returns true if the timer is disposed.
     *
     * @var bool
     */
    public bool $isDisposed;

    /**
     * Возвращает запланированное время выполнения последней
     * фактической выполнения этой задачи. (Если этот метод вызывается
     * во время выполнения задачи, возвращаемое значение - это запланированное
     * время выполнения текущей задачи).
     *
     * Returns the scheduled execution time of the most recent
     * actual execution of this task. (If this method is invoked
     * while task execution is in progress, the return value is the scheduled
     * execution time of the ongoing task execution.)
     *
     * @return int
     */
    function scheduledTime(): int
    {
    }
}
