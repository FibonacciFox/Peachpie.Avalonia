<?php

namespace Php\Threading\Tasks;

use Exception;
use Throwable;

class TaskAlreadyStartedException extends Exception
{
    /**
     * @param string|null $message
     * @param int|null $inner
     * @param Throwable|null $previous
     * @throws TaskAlreadyStartedException
     */
    public function __construct(string $message = null, int $inner = null, Throwable $previous = null)
    {
        if($message == null && $inner == null && $previous ) {
            throw new TaskAlreadyStartedException("Task already started.");
        }
    }
}