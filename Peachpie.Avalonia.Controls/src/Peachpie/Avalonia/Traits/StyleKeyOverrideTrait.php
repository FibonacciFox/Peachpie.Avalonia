<?php

namespace Peachpie\Avalonia\Traits;
use System\Type;
use Peachpie\Base\ObjectType;

trait StyleKeyOverrideTrait
{

    /**
     * Override a control's style key
     * @return Type
     */
    public function get_StyleKeyOverride() : Type
    {
        return ObjectType::GetBaseType($this);
    }

}