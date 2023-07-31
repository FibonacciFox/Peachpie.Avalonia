<?php

namespace MyPhpLib {

    use Avalonia\Layout\HorizontalAlignment;
    ######
    use Avalonia\Media\Imaging\Bitmap;
    use Avalonia\Platform\AssetLoader;
    use Avalonia\Controls\WindowIcon;
    ######
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\TextDisplay\UxTextBox;
    use System\Uri;

    use Peachpie\Avalonia\Controls\Buttons\UxButton;
    use Peachpie\Avalonia\Controls\Windows\UxWindow;

    class PHPWindow extends UxWindow {

        public UxButton $MyButton;
        public UxWindow $MyAxamlWindow;

            public function __construct()
            {
                $this->Width = 300;
                $this->Height = 300;
                $this->Title = "MainWindow";
                $currentWindow = $this;
                $this->InitializeComponent($this);

                /**
                $button = new UxButton();
                $button->Content = "Hello";
                $button->HorizontalAlignment = HorizontalAlignment::Center;
                $this->Content = $button;

                $this->on('DoubleTapped', function($sender, $e){
                $sender->Title = "Hello W";
                });
                 */


                $uri_warn64 = new Uri("avares://MyPhpLib/Assets/Warn64.png");
                $Warn64 = new Bitmap(AssetLoader::Open($uri_warn64)); //new Uri($Warn64) - не нужно пока что писать в анонимках. Лучше заранее определить.

                $TextBox = new UxTextBox();
                //$TextBox->HorizontalAlignment = HorizontalAlignment::Center;
                $TextBox->on('KeyDown', function($sender, $e) use ($Warn64, $currentWindow ) {
                    $currentWindow->Icon = new WindowIcon($Warn64);
                });

                $this->Content = $TextBox;
            }

        public function InitializeComponent() : void {

            $uri = new Uri("avares://MyPhpLib/src/MyPhpLib/PHPWindow.axaml");
            $this->MyAxamlWindow = AvaloniaXamlLoader::Load( $uri, null );
            $this->MyAxamlWindow->on('PointerEntered', function($sender, $e){
                $sender->Title = "PHPAxamlWindow";
            });

            $this->MyButton = $this->MyAxamlWindow->FindByName("MyUxButton");
            $this->MyButton->Content = "Новое имя для кнопки!";

            $this->MyAxamlWindow->Show();
        }


     }
    
    
}