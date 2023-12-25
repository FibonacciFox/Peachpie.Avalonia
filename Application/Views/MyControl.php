<?php

namespace Views {

    use Avalonia\Interactivity\RoutedEventArgs;
    use Avalonia\Layout\{HorizontalAlignment, VerticalAlignment};
    use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Collections\UxList;
    use Peachpie\Avalonia\Controls\{UxUserControl};

    use Avalonia\Media\Brushes;

    class MyControl extends UxUserControl
    {
        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();

        }

        public function GetData(): object {
                return 100;
        }
        
        public function SetData(object $value){
                
        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}