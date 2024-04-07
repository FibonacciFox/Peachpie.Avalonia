<?php

/**
 * UxStackPanel short summary.
 *
 * UxStackPanel description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventTrait;

class UxStackPanel extends \Avalonia\Controls\StackPanel implements IStyleKeyOverride
{
    use EventTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$StackPanel;
    }
}