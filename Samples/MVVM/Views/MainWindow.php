<?php

namespace Views {

    use Avalonia\Controls\Window;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;

    class MainWindow extends Window
    {
        public function __construct()
        {
            $this->InitializeComponent();
        }

        //Не удаляйте метод, если используете разметку axaml
        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj:$this);
        }
    }

}