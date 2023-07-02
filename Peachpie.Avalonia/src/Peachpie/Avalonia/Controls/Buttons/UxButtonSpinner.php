<?php

/**
 * UxButtonSpinner short summary.
 *
 * UxButtonSpinner description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls\Buttons;

use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;
use Peachpie\Avalonia\Extension\StyleKeyOverride;

class UxButtonSpinner extends \Avalonia\Controls\ButtonSpinner implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$ButtonSpinner;
    }
}