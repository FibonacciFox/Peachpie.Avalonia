<?php

/**
 * UxPanel short summary.
 *
 * UxPanel description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventTrait;

class UxPanel extends \Avalonia\Controls\Panel implements IStyleKeyOverride
{
    use EventTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$Panel;
    }
}