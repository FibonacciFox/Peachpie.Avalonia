<?php

namespace Views {

    use Peachpie\Avalonia\Controls\UxUserControl;

    class ToDoListView extends UxUserControl
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