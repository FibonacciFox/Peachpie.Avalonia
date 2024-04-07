<?php

/**
 * UxAutoCompleteBox short summary.
 *
 * UxAutoCompleteBox description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;
use System\Type;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventTrait;

class UxAutoCompleteBox extends \Avalonia\Controls\AutoCompleteBox implements IStyleKeyOverride
{
    use EventTrait;

    public function get_StyleKeyOverride(): Type
    {
       return StyleKeyOverride::$AutoCompleteBox;
    }
}