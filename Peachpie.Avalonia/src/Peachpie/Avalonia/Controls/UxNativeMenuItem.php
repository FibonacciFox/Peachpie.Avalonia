<?php

/**
 * UxNativeMenuItem short summary.
 *
 * UxNativeMenuItem description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;

class UxNativeMenuItem extends \Avalonia\Controls\NativeMenuItem implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$NativeMenuItem;
    }
}