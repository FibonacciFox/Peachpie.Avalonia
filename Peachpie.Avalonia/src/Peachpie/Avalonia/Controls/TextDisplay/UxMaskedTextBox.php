<?php

/**
 * UxMaskedTextBox short summary.
 *
 * UxMaskedTextBox description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls\TextDisplay;

use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;
use Peachpie\Avalonia\Extension\StyleKeyOverride;

class UxMaskedTextBox extends \Avalonia\Controls\MaskedTextBox implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$MaskedTextBox;
    }
}