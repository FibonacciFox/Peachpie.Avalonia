<?php

namespace Php\Listener;

class Event
{
    /**
     * @param object $targetObject
     * @param string $eventName
     * @param callable $eventHandler
     * @param string|null $eventId
     * @return void
     */
    public static function on(object $targetObject, string $eventName, callable $eventHandler , string $eventId = null) : void
    {

    }

    /**
     * @param object $targetObject
     * @param string $eventId
     * @return void
     */
    public static function off(object $targetObject, string $eventId)
    {

    }
}