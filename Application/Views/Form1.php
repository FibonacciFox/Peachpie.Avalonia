<?php

namespace Views {
    use Avalonia\DevToolsExtensions;
    use Avalonia\Interactivity\RoutedEventArgs;
    use Avalonia\Layout\HorizontalAlignment;
    use Avalonia\Layout\VerticalAlignment;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxStackPanel;
    use Peachpie\Avalonia\Controls\UxWindow;

    use Avalonia\Media\Brushes;

    class Form1 extends UxWindow
    {
        public UxButton $MyUxButton;
        public UxButton $MyUxButton2;
        public UxStackPanel $MyUxStackPanel;
        

        public function __construct()
        {
            $this->InitializeComponent();
            
            $this->MyUxButton = $this->FindByName("MyUxButton");
            $this->MyUxButton2 = $this->FindByName("MyUxButton2");
            $this->MyUxStackPanel = $this->FindByName("MyUxStackPanel");
     
            $MyUxButton_Click = function(object $sender , RoutedEventArgs $e) {
                    $this->MyUxButton->Content = "Clicked!1";
            };


            $this->MyUxButton->on("Click" , $MyUxButton_Click  , "MyUxButton_Click");


            $this->MyUxButton2->on(UxButton::$ClickEvent , function(object $sender , RoutedEventArgs $e) {
                $this->MyUxButton2->Content = "Clicked!2";
            },"MyUxButton2_Click");

           // $this->MyUxButton->off("MyUxButton_Click");
           // $this->MyUxButton2->off("MyUxButton2_Click");


        }

        public function InitializeComponent(): void
        {
            Load();
            //DevTools press F12
            DevToolsExtensions::AttachDevTools($this);
        }
    }

}