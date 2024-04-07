<?php

/**
 * UxGridSplitter short summary.
 *
 * UxGridSplitter description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventTrait;

class UxGridSplitter extends \Avalonia\Controls\GridSplitter implements IStyleKeyOverride
{
    use EventTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$GridSplitter;
    }
}