<?php

namespace Views\Pages {

    use Avalonia\Controls\UserControl;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;

    class FieldsPage extends UserControl
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