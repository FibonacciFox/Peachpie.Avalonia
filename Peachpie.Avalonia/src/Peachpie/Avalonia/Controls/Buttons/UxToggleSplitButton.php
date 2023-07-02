<?php

/**
 * UxToggleSplitButton short summary.
 *
 * UxToggleSplitButton description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls\Buttons;

use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;
use Peachpie\Avalonia\Extension\StyleKeyOverride;

class UxToggleSplitButton extends \Avalonia\Controls\ToggleSplitButton implements IStyleKeyOverride
{
    use EventsTrait;
    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$ToggleSplitButton;
    }
}