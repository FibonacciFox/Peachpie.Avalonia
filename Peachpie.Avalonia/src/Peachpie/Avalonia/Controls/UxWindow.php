<?php

/**
 * UxWindow short summary.
 *
 * UxWindow description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use System\Type;
use Avalonia\Controls\Window;
use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\Traits\BaseTrait;

class UxWindow extends Window
{
    use BaseTrait;

    public function get_StyleKeyOverride(): Type
    {
        return StyleKeyOverride::$Window;
    }
}