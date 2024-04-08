<?php

namespace Peachpie\Avalonia;

use JetBrains\PhpStorm\Deprecated;
use System\Type;

#[Deprecated]
interface IStyleKeyOverride
{
    /**
     * @return Type
     */
    public function get_StyleKeyOverride() : Type;
}