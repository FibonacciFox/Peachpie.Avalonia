<?php

namespace Peachpie\Avalonia\Traits;
use Peachpie\Avalonia\Core\Extension\AvaloniaProperty;

trait AvaloniaPropertyTrait
{
    /**
     * @param string $name
     * @return mixed
     */
    public function Register(string $name): mixed
    {
        return AvaloniaProperty::Register($this, $name);
    }

}