<?php

namespace Application\Forms {

    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxStackPanel;
    use Peachpie\Avalonia\Controls\UxWindow;

    class Demo extends UxWindow
    {
        public UxButton $MyUxButton;
        public UxStackPanel $MyUxStackPanel;
    
        public function __construct()
        {
            //Сначала всегда инициализируем компонент формы.
            $this->InitializeComponent();

        }


        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}