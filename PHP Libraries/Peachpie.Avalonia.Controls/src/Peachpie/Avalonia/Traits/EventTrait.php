<?php

namespace Peachpie\Avalonia\Traits;

use Php\Listener\Event;

trait EventTrait
{
    /**
     * @param string $event
     * @param callable $handler
     * @param string|null $eventId
     * @return void
     */
    public function on(string $event, callable $handler , string $eventId = null): void
    {
        Event::on($this, $event, $handler, $eventId);
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