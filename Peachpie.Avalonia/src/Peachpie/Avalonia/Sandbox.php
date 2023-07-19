<?php

namespace Peachpie\Avalonia;

use Peachpie\Avalonia\Controls\Windows\UxWindow;

abstract class Sandbox
{

    /**
     * @param UxWindow $window
     * @return void
     */
    abstract public function InitializeWindow(UxWindow $window):void;
}