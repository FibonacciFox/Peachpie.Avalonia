<?php

namespace Application\Forms {

    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\Buttons\UxButton;
    use Peachpie\Avalonia\Controls\Layout\UxStackPanel;
    use Peachpie\Avalonia\Controls\TextDisplay\UxTextBlock;
    use Peachpie\Avalonia\Controls\Windows\UxWindow;

    class Form1 extends UxWindow
    {
        public UxButton $MyUxButton;
        public UxStackPanel $MyUxStackPanel;
    
        public function __construct()
        {
            //Сначала всегда инициализируем компонент формы.
            $this->InitializeComponent();

            $this->MyUxButton = $this->FindByName("MyUxButton");
            $this->MyUxStackPanel = $this->FindByName("MyUxStackPanel");

            $this->MyUxButton->on("Click", function (UxButton $button, $args) {
                $text = new UxTextBlock();
                $text->HorizontalAlignment = \Avalonia\Layout\HorizontalAlignment::Center;
                $text->Text = "Added New Text Block";
                $this->MyUxStackPanel->Children->Add($text);
            });
        }


        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}