<?php

/**
 * UxUserControl short summary.
 *
 * UxUserControl description.
 *
 * @version 1.0
 * @author FibonacciFox
 */

namespace Peachpie\Avalonia\Controls;

use Peachpie\Avalonia\Traits\EventsTrait;
use Peachpie\Avalonia\Traits\GetComponentTrait;
use Peachpie\Avalonia\Traits\AvaloniaPropertyTrait;

class UxUserControl extends \Avalonia\Controls\UserControl
{
    use AvaloniaPropertyTrait;
    use GetComponentTrait;
    use EventsTrait;
}