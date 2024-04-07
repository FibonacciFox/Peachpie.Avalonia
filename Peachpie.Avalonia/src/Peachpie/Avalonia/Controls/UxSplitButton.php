<?php

/**
 * UxSplitButton short summary.
 *
 * UxSplitButton description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventTrait;

class UxSplitButton extends \Avalonia\Controls\SplitButton implements IStyleKeyOverride
{
    use EventTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$SplitButton;
    }
}