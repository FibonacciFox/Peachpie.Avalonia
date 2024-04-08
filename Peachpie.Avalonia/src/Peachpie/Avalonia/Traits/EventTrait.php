<?php

namespace Peachpie\Avalonia\Traits;

use Closure;
use Avalonia\Controls\Control;
use Peachpie\Avalonia\Core\Extension\Event;

trait EventTrait
{

    /**
     * @param object|string|Control $eventType
     * @param Closure $callback
     * @param string $eventId
     * @return void
     */
    public function on( $eventType, Closure $callback , string $eventId): void
    {
        Event::on($this, $eventType, $callback, $eventId);
    }


    /**
     * @param string $eventId
     * @return void
     */
    public function off(string $eventId): void
    {
         Event::off($this, $eventId);
    }

}