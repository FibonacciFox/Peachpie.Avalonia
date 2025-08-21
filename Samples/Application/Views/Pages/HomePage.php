<?php

namespace Views\Pages {

    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\UxUserControl;

    class HomePage extends UxUserControl
    {
        public function __construct()
        {
            $this->InitializeComponent();
        }

        private function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj:$this);
        }
    }

}