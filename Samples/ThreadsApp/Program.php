<?php
use Php\Threading\Timer;

// Создание таймера с интервалом в 1 секунду / Create a timer with an interval of 1 second
$intervalTimer = Timer::every('1s', function() {
    echo "This task runs every 1 second.\n";
});

// Проверка состояния таймера / Check the timer state
if ($intervalTimer->isRunning) {
    echo "The timer is currently running.\n";
} else {
    echo "The timer is not running.\n";
}

// Остановка таймера через 5 секунд / Stop the timer after 5 seconds
Timer::setTimeout(function() use ($intervalTimer) {
    $intervalTimer->stop();
    echo "Timer stopped.\n";

    // Проверка состояния таймера после остановки / Check the timer state after stopping
    if (!$intervalTimer->isRunning) {
        echo "The timer has been stopped.\n";
    }
}, 5000);

// Перезапуск таймера через 10 секунд / Restart the timer after 10 seconds
Timer::setTimeout(function() use ($intervalTimer) {
    $intervalTimer->restart();
    echo "Timer restarted.\n";

    // Проверка состояния таймера после перезапуска / Check the timer state after restarting
    if ($intervalTimer->isRunning) {
        echo "The timer is running again.\n";
    }
}, 10000);

// Изменение времени задержки и периода таймера через 15 секунд / Change the timer's due time and period after 15 seconds
Timer::setTimeout(function() use ($intervalTimer) {
    $intervalTimer->change(2000, 2000); // Установить задержку и период в 2 секунды / Set delay and period to 2 seconds
    echo "Timer interval changed to 2 seconds.\n";
}, 15000);

// Применение sleep для задержки выполнения скрипта / Use sleep to delay script execution
echo "Going to sleep for 3 seconds.\n";
Timer::sleep('3s');
echo "Woke up after sleeping.\n";

// Отмена конкретного таймера / Cancel the specific timer
$intervalTimer->cancel();
echo "Canceled the interval timer.\n";

// Проверка состояния таймера после отмены / Check the timer state after cancellation
if ($intervalTimer->isDisposed) {
    echo "The timer has been disposed.\n";
}

// Отмена всех таймеров / Cancel all timers
Timer::cancelAll();
echo "All timers have been canceled.\n";



