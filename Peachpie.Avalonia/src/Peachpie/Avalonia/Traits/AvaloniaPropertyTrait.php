<?php

namespace Peachpie\Avalonia\Traits;
use Peachpie\Avalonia\Core\AvaloniaPropertyExt;

trait AvaloniaPropertyTrait
{
    /**
     * @param string $name
     * @return mixed
     */
    public function Register(string $name): mixed
    {
        return AvaloniaPropertyExt::Register($this, $name);
    }

}