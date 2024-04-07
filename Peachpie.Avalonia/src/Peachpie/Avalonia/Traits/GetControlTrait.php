<?php

namespace Peachpie\Avalonia\Traits;
use Peachpie\Avalonia\Core\Extension\GetControl;

trait GetControlTrait
{

    /**
     * @param string $name
     * @return mixed
     */
    public function FindByName(string $name): mixed
    {
        return GetControl::FindByName($this, $name);
    }

}