<?php

use Php\Threading\Tasks\ManagedTask;
use Php\Threading\Tasks\ManagedTaskCreationOptions;
use Php\Output\Logger;

function task1(): string {
    sleep(2);
    return "Задача 1 выполнена";
}

function task2(): string {
    sleep(3);
    return "Задача 2 выполнена";
}

function task3(): string {
    sleep(1);
    return "Задача 3 выполнена";
}

$task1 = ManagedTask::Run('task1');
$task2 = ManagedTask::Run('task2');
$task3 = ManagedTask::Run('task3');

$tasks = [$task1, $task2, $task3];

// Ожидаем завершения любой задачи
$completedTaskIndex = ManagedTask::WaitAny($tasks);

Logger::Info("Задача с индексом {$completedTaskIndex} завершена первой");

