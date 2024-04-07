<?php

namespace Peachpie\Avalonia\Traits;

use Closure;
use Peachpie\Avalonia\Core\Extension\Event;

trait EventTrait
{

    /**
     * @param Control $eventName
     * @param Closure $callback
     * @param string $eventName
     * @return void
     */
    public function on( $eventType, Closure $callback , string $eventName): void
    {
        Event::on($this, $eventType, $callback, $eventName);
    }
    
    /**
     * @param Control $eventType
     * @param string $eventName
     * @return void
     */
    public function off(string $eventName ): void
    {
         Event::off($this, $eventName);
    }

}