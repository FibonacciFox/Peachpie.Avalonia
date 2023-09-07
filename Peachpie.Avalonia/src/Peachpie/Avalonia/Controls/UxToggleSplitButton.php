<?php

/**
 * UxToggleSplitButton short summary.
 *
 * UxToggleSplitButton description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;

class UxToggleSplitButton extends \Avalonia\Controls\ToggleSplitButton implements IStyleKeyOverride
{
    use EventsTrait;
    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$ToggleSplitButton;
    }
}