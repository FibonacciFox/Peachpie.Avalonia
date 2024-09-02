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

use System\Type;
use Avalonia\Controls\ToggleSplitButton;
use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\BaseTrait;
class UxToggleSplitButton extends ToggleSplitButton implements IStyleKeyOverride
{
    use BaseTrait;

    public function get_StyleKeyOverride(): Type
    {
       return StyleKeyOverride::$ToggleSplitButton;
    }
}