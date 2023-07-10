<?php

namespace MyPhpLib {

    use Avalonia\Layout\HorizontalAlignment;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use System\Uri;

    use Peachpie\Avalonia\Controls\Buttons\UxButton;
    use Peachpie\Avalonia\Controls\Windows\UxWindow;

    class PHPWindow extends UxWindow {

        public UxButton $MyButton;
        public UxWindow $MyAxamlWindow;

            public function __construct()
            {
                $this->InitializeComponent($this);

                $button = new UxButton();
                $button->Content = "Hello";
                $button->HorizontalAlignment = HorizontalAlignment::Center;
               // $this->Content = $button;

                $this->on('DoubleTapped', function($sender, $e){
                    $sender->Title = "Hello W";
                });

            }

        public function InitializeComponent() : void {

            $uri = new Uri("avares://MyPhpLib/src/MyPhpLib/PHPWindow.axaml");
            $this->MyAxamlWindow = AvaloniaXamlLoader::Load( $uri, null );
            $this->MyAxamlWindow->on('PointerEntered', function($sender, $e){
                $sender->Title = "PHPAxamlWindow";
            });

            $this->MyButton = $this->MyAxamlWindow->FindByName("MyUxButton");
            $this->MyButton->Content = "Ya Knopka";
            $this->MyAxamlWindow->Show();
        }


     }
    
    
}