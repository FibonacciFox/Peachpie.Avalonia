<?php

namespace Peachpie\Avalonia\Traits;

use Closure;
use Peachpie\Avalonia\Core\EventsTraitExtension;

trait EventsTrait
{

    /**
     * @param Control $eventName
     * @param Closure $callback
     * @param string $eventName
     * @return void
     */
    public function on( $eventType, Closure $callback , string $eventName): void
    {
        EventsTraitExtension::on($this, $eventType, $callback, $eventName);
    }
    
    /**
     * @param Control $eventType
     * @param string $eventName
     * @return void
     */
    public function off(string $eventName ): void
    {
         EventsTraitExtension::off($this, $eventName);
    }

}