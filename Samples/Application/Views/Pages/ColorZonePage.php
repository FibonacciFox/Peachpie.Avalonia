<?php

namespace Views\Pages {
   
    use Peachpie\Avalonia\Controls\UxUserControl;

    class ColorZonePage extends UxUserControl
    {
        public function __construct()
        {
            $this->InitializeComponent();
        }

        private function InitializeComponent(): void
        {
            Load();
        }
    }

}