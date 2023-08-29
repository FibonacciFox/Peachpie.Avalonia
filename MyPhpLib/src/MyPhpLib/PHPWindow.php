<?php

namespace MyPhpLib {

    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\Buttons\UxButton;
    use Peachpie\Avalonia\Controls\Windows\UxWindow;

    class PHPWindow extends UxWindow
    {
        public UxButton $MyUxButton;


        public function __construct()
        {
            $this->InitializeComponent();

            $this->MyUxButton = $this->FindByName("MyUxButton");
        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}