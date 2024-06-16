<?php

namespace Php\Threading\Tasks;

use Exception;

class ManagedTaskException extends Exception
{
    /**
     * @param string|null $message
     * @param int|null $inner
     * @throws ManagedTaskException
     */
    public function __construct(string $message = null, int $inner = null)
    {
        throw new ManagedTaskException($message, $inner);
    }
}