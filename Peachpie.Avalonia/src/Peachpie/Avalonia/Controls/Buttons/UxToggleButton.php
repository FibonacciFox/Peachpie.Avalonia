<?php

/**
 * UxToggleButton short summary.
 *
 * UxToggleButton description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls\Buttons;

use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;
use Peachpie\Avalonia\Extension\StyleKeyOverride;

class UxToggleButton extends \Avalonia\Controls\Primitives\ToggleButton implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$ToggleButton;
    }
}