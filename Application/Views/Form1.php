<?php

namespace Views {
    use Avalonia\DevToolsExtensions;
    use Avalonia\Controls\Button;
    use Avalonia\Interactivity\RoutedEventArgs;
    use Avalonia\Layout\HorizontalAlignment;
    use Avalonia\Layout\VerticalAlignment;
    use Peachpie\Avalonia\Collections\UxList;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxListBox;
    use Peachpie\Avalonia\Controls\UxStackPanel;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;
    
    use Avalonia\Media\Brushes;

    class Form1 extends UxWindow
    {
        public UxButton $MyUxButton;
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


            $list = new UxList();
            $list->Add("0");
            $list->Add("1");
            $list->Add("3");
            $list->Add("4");
            $list->Add("5");


            $this->MyListBox->ItemsSource = $list;
            $this->MyUxButton->on("Click", function (UxButton $button, $args) {
                $text = new UxTextBlock();
                $text->HorizontalAlignment = HorizontalAlignment::Center;
                $text->VerticalAlignment = VerticalAlignment::Center;
                $text->Text = "Added New Text Block";
                $this->MyUxStackPanel->Children->Add($text);
            });

            
            //$this->on('Closing', function (UxWindow $demo, $e){
            //                $this->Hide();
            //                $e->Cancel = true;
            //});
           
        }

        public function InitializeComponent(): void
        {
            Load();
            
            //DevTools press F12
            DevToolsExtensions::AttachDevTools($this);
        }
    }

}