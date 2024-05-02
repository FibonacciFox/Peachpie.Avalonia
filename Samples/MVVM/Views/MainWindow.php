<?php

namespace Views {

    use Peachpie\Avalonia\Controls\UxWindow;

    class MainWindow extends UxWindow
    {
        public function __construct()
        {
            $this->InitializeComponent();
        }

        //Не удаляйте метод, если используете разметку axaml
        public function InitializeComponent(): void
        {
            Load();
        }
    }

}