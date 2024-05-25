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
     */
    public function __construct(callable $runnable)
    {

    }

    /**
     * Starts the ManagedTask
     * @return void
     * @throws TaskAlreadyStartedException
     */
    public function start() : void {
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
     * Disposes the ManagedTask, releasing all of its unmanaged resources.
     * @return void
     */
    public function Dispose() : void {
    }

}