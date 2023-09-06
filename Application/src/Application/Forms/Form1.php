<?php

namespace Application\Forms {

    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxStackPanel;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;

    class Form1 extends UxWindow
    {
        public UxButton $MyUxButton;
        public UxButton $OpenDemo;
        public UxStackPanel $MyUxStackPanel;


        public function __construct()
        {
            //Сначала всегда инициализируем компонент формы.
            $this->InitializeComponent();

            $this->MyUxButton = $this->FindByName("MyUxButton");
            $this->OpenDemo = $this->FindByName("OpenDemo");
            $this->MyUxStackPanel = $this->FindByName("MyUxStackPanel");

            $this->MyUxButton->on("Click", function (UxButton $button, $args) {
                $text = new UxTextBlock();
                $text->HorizontalAlignment = \Avalonia\Layout\HorizontalAlignment::Center;
                $text->Text = "Added New Text Block";
                $this->MyUxStackPanel->Children->Add($text);
            });

            $this->OpenDemo->on("Click", function (UxButton $button, $args) {
                $Demo = new Demo();
                $Demo->Show();
            });
        }


        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}