<?php

/**
 * UxCalendarDatePicker short summary.
 *
 * UxCalendarDatePicker description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls\ValueSelection;

use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;
use Peachpie\Avalonia\Extension\StyleKeyOverride;

class UxCalendarDatePicker extends \Avalonia\Controls\CalendarDatePicker implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$CalendarDatePicker;
    }
}