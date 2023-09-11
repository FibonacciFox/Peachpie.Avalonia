<?php

namespace Application\Forms {

    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Peachpie\Avalonia\Collections\UxList;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxListBox;
    use Peachpie\Avalonia\Controls\UxStackPanel;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;

    class Form1 extends UxWindow
    {
        public UxButton $MyUxButton;
        public UxButton $OpenDemo;
        public UxStackPanel $MyUxStackPanel;
        private UxListBox $MyListBox;


        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
            
            $this->MyUxButton = $this->FindByName("MyUxButton");
            $this->OpenDemo = $this->FindByName("OpenDemo");
            $this->MyUxStackPanel = $this->FindByName("MyUxStackPanel");
            $this->MyListBox = $this->FindByName("MyListBox");

            $this->MyUxButton->on("Click", function (UxButton $button, $args) {
                $text = new UxTextBlock();
                $text->HorizontalAlignment = \Avalonia\Layout\HorizontalAlignment::Center;
                $text->Text = "Added New Text Block";
                $this->MyUxStackPanel->Children->Add($text);
            });

            $Uxlist = new Uxlist();

            $this->MyListBox->ItemsSource = $Uxlist;

            $this->OpenDemo->on("Click", callback: function (UxButton $button, $args) use ($Uxlist) {

                $Uxlist->Add(new UxButton());
                $this->Title =  $Uxlist[0];
            });

        }


        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}