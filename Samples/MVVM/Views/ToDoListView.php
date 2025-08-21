<?php

namespace Views {

    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
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
            AvaloniaXamlLoader::Load(obj:$this);
        }
    }

}