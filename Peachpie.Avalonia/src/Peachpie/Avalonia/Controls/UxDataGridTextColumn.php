<?php

/**
 * UxDataGrid short summary.
 *
 * UxDataGrid description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Core\StyleKeyOverride;
use Peachpie\Avalonia\IStyleKeyOverride;
use Peachpie\Avalonia\Traits\EventsTrait;

class UxDataGridTextColumn extends \Avalonia\Controls\DataGridTextColumn implements IStyleKeyOverride
{
    use EventsTrait;

    public function get_StyleKeyOverride(): \System\Type
    {
       return StyleKeyOverride::$DataGridTextColumn;
    }
}