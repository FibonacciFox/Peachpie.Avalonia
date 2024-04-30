<?php

namespace Peachpie\Avalonia\Traits;

use Peachpie\Avalonia\Core\Extension\Property;

trait PropertyTrait
{
    /**
     * Registers a AvaloniaProperty.
     * @param string $nameProperty
     * @return mixed
     */
    public function Register(string $nameProperty): mixed
    {
        return Property::Register($nameProperty);
    }
}