<?php

namespace Peachpie\Avalonia\Traits;
use Peachpie\Community\ObjectType;
use System\Type;

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