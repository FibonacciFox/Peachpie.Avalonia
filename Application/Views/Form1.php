<?php

namespace Views {
    use Avalonia\DevToolsExtensions;
    use Avalonia\Interactivity\RoutedEventArgs;
    use Avalonia\Layout\HorizontalAlignment;
    use Avalonia\Layout\VerticalAlignment;
    use Peachpie\Avalonia\Collections\UxList;
    use Peachpie\Avalonia\Controls\UxButton;
    use Peachpie\Avalonia\Controls\UxListBox;
    use Peachpie\Avalonia\Controls\UxStackPanel;
    use Peachpie\Avalonia\Controls\UxTextBlock;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Peachpie\Avalonia\Controls\UxButtonSpinner;
    
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
                    $this->MyUxButton->Content = "Clicked!";
            };
          
            $this->MyUxButton->on(UxButton::$ClickEvent , $MyUxButton_Click , "Click");

           // $this->MyUxButton->off("Entered");
            

        }
        
        public function MyUxButton2_click( object $sender , RoutedEventArgs $e) : void {
            $this->MyUxButton2->Content = "Clicked Button2!";
        }

        public function InitializeComponent(): void
        {
            Load();
            //DevTools press F12
            DevToolsExtensions::AttachDevTools($this);
        }
    }

}