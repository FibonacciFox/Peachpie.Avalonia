<?php

namespace Peachpie\Avalonia\Traits;
use Peachpie\Avalonia\Extension\GetComponent;

trait GetComponentTrait
{

    /**
     * @param string $name
     * @return object
     */
    public function FindByName(string $name) : object
    {
        return GetComponent::FindByName($this, $name);
    }

}