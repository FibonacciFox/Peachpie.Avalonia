<?php

/**
 * UxStackPanel short summary.
 *
 * UxStackPanel description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls\Layout;

use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;
use Peachpie\Avalonia\Extension\StyleKeyOverride;

class UxStackPanel extends \Avalonia\Controls\StackPanel implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$StackPanel;
    }
}