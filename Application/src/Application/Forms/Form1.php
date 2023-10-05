<?php

namespace Application\Forms {

    use Avalonia\Interactivity\RoutedEventArgs;
    use Avalonia\Layout\HorizontalAlignment;
    use Avalonia\Layout\VerticalAlignment;
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

        private UxWindow $Demo;


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
            
            $this->MyListBox->ItemsSource = $list;
            $this->MyUxButton->on("Click", function (UxButton $button, $args) {
                $text = new UxTextBlock();
                $text->HorizontalAlignment = HorizontalAlignment::Center;
                $text->VerticalAlignment = VerticalAlignment::Center;
                $text->Text = "Added New Text Block";
               // $this->MyUxStackPanel->Children->Add($text);
            });


            $this->Demo = new Demo();

            $this->OpenDemo->on("Click", callback: function (UxButton $button, RoutedEventArgs $args) {
                if(!$this->Demo->IsVisible){
                    $button->Content = "Hide Demo Window";
                    $this->Demo->Show();
                } else{
                    $button->Content = "Open Demo Window";
                    $this->Demo->Hide();
                }
            });
        }


        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }

}