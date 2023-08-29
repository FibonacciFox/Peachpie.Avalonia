<?php

namespace Peachpie\Avalonia\Traits;
use Peachpie\Avalonia\Extension\GetComponent;

trait GetComponentTrait
{

    /**
     * @param string $name
     * @return mixed
     */
    public function FindByName(string $name): mixed
    {
        return GetComponent::FindByName($this, $name);
    }

}