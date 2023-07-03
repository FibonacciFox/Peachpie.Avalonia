<?php

namespace MyPhpLib {

    use Peachpie\Avalonia\Controls\ValueSelection\UxCalendar;
    use Peachpie\Avalonia\Controls\Windows\UxWindow;

    class PHPWindow extends UxWindow {
            public function __construct()
            {
                $this->Content = new UxCalendar();
            }
    }
}