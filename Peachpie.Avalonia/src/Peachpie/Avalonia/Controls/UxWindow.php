<?php

/**
 * UxWindow short summary.
 *
 * UxWindow description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventTrait;
use Peachpie\Avalonia\Traits\GetControlTrait;

class UxWindow extends \Avalonia\Controls\Window implements IStyleKeyOverride
{
    use EventTrait;
    use GetControlTrait;
    
    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$Window;
    }
}