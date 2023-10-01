<?php

/**
 * UxTextBlock short summary.
 *
 * UxTextBlock description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Avalonia\Layout\HorizontalAlignment;
use Avalonia\Layout\VerticalAlignment;
use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;

/**
 * @property HorizontalAlignment $HorizontalAlignment
 * @property VerticalAlignment $VerticalAlignment
 */
class UxTextBlock extends \Avalonia\Controls\TextBlock implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$TextBlock;
    }
}