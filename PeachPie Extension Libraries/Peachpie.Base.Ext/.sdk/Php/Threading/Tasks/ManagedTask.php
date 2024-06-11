<?php

namespace Php\Threading\Tasks;

use System\IDisposable;
use System\Threading\Tasks\TaskStatus;

class ManagedTask implements IDisposable
{
    /**
     * Gets an ID for this Task instance.
     * @var int
     */
    public int $Id;

    /**
     * Gets the TaskStatus of this task.
     * @var TaskStatus
     */
    public TaskStatus $Status;

    /**
     * Gets a value that indicates whether the task has completed.
     * @var bool
     */
    public bool $IsCompleted;

    /**
     * Gets whether this Task instance has completed execution due to being canceled.
     * @var bool
     */
    public bool $IsCanceled;

    /**
     * Gets whether the task ran to completion.
     * @var bool
     */
    public bool $IsCompletedSuccessfully;

    /**
     * Gets whether the Task completed due to an unhandled exception.
     * @var bool
     */
    public bool $IsFaulted;

    /**
     *
     * @var bool
     */
    public bool $IsPaused;

    /**
     * @var bool
     */
    public bool $IsStarted;

    /**
     * @param callable $runnable
     * @param ManagedTaskCreationOptions $options
     */
    public function __construct(callable $runnable , ManagedTaskCreationOptions $options = ManagedTaskCreationOptions::None )
    {
    }

    /**
     * Starts the ManagedTask
     * @return void
     */
    public function start() : void {
    }

    public static function run(callable $runnable , ManagedTaskCreationOptions $options = ManagedTaskCreationOptions::None) : ManagedTask {

    }

    /**
     * Pause ManagedTask
     * @return void
     */
    public function pause() : void {
    }

    /**
     * Resume ManagedTask
     * @return void
     */
    public function resume() : void {
    }

    /**
     * Stop ManagedTask
     * @return void
     */
    public function stop() : void {
    }

    /**
     * Gets the result value of this ManagedTask.
     * @return mixed
     */
    public function GetResultSync() : mixed
    {

    }


    /**
     * @param callable $continuationAction
     * @return ManagedTask
     */
    public function ContinueWith(callable $continuationAction , ManagedTaskCreationOptions $options = ManagedTaskCreationOptions::None) : ManagedTask
    {
        return new ManagedTask($continuationAction);
    }

    /**
     * Disposes the ManagedTask, releasing all of its unmanaged resources.
     * @return void
     */
    public function Dispose() : void {

    }

}