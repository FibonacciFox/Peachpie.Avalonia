<?php

/**
 * UxNumericUpDown short summary.
 *
 * UxNumericUpDown description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;

class UxNumericUpDown extends \Avalonia\Controls\NumericUpDown implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$NumericUpDown;
    }
}