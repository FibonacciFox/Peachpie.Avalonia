<?php

namespace Views {
    use Avalonia\DevToolsExtensions;
    use Avalonia\Interactivity\RoutedEventArgs;
    use Avalonia\Input\TappedEventArgs;
    use Avalonia\Layout\HorizontalAlignment;
    use Avalonia\Layout\VerticalAlignment;
    use Peachpie\Avalonia\Controls\UxContentControl;
    use Peachpie\Avalonia\Controls\UxListBox;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Views\Pages\ButtonsPage;
    use Views\Pages\ColorZonePage;
    use Views\Pages\FieldsPage;
    use Views\Pages\HomePage;
    use Views\Pages\ProgressIndicatorsPage;

    class MainWindow extends UxWindow
    {
        public UxContentControl $PageView;
        public UxListBox $ItemMenu;



        public function __construct()
        {
            $this->InitializeComponent();
            $this->PageView = $this->FindByName("PageView");
            $this->ItemMenu = $this->FindByName("ItemMenu");

            $this->PageView->Content = new HomePage();
        }

        public function ItemMenu_OnTapped(object $sender, TappedEventArgs $e) : void {
            switch ($this->ItemMenu->SelectedIndex) {
                case 0:
                    $this->PageView->Content = new HomePage();
                    break;
                case 1:
                    $this->PageView->Content = new ButtonsPage();
                    break;
                case 2:
                    $this->PageView->Content = new ColorZonePage();
                    break;
                case 3:
                    $this->PageView->Content = new FieldsPage();
                    break;
                case 4:
                    $this->PageView->Content = new ProgressIndicatorsPage();
                    break;
            }
        }

        private function InitializeComponent(): void
        {
            Load();
            //DevTools press F12
            DevToolsExtensions::AttachDevTools($this);
        }
    }

}