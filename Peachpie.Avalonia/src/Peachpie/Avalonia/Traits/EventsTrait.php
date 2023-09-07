<?php

namespace Peachpie\Avalonia\Traits;

use Closure;
use Peachpie\Avalonia\Core\EventsTraitExtension;

trait EventsTrait
{

    /**
     * @param string $eventName
     * @param Closure $callback
     * @return void
     */
    public function on(string $eventName, Closure $callback): void
    {
        EventsTraitExtension::on($this, $eventName, $callback);
    }

}