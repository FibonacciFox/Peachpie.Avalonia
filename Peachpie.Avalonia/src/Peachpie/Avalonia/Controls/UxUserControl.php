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

use Peachpie\Avalonia\Traits\EventTrait;
use Peachpie\Avalonia\Traits\GetControlTrait;
use Peachpie\Avalonia\Traits\AvaloniaPropertyTrait;

class UxUserControl extends \Avalonia\Controls\UserControl
{
    use AvaloniaPropertyTrait;
    use GetControlTrait;
    use EventTrait;
}