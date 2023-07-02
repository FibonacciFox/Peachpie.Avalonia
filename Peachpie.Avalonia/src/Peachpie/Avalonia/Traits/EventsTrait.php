<?php

namespace Peachpie\Avalonia\Traits;

use Closure;
use Peachpie\Avalonia\Extension\Events;

trait EventsTrait
{
    /**
     * @param string $eventName
     * @param Closure $callback
     * @return void
     */
    public function on(string $eventName, Closure $callback ): void
    {
        Events::on($this, $eventName, $callback );
    }
}