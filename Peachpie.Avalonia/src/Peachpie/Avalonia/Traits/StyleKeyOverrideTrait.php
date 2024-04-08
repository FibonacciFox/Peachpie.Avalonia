<?php

namespace Peachpie\Avalonia\Traits;
use System\Type;
use Peachpie\Avalonia\Core\Extension\BaseType;

trait StyleKeyOverrideTrait
{

    public function get_StyleKeyOverride() : Type
    {
        return BaseType::Get($this);
    }

}