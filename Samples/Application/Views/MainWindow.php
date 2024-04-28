<?php

namespace Views {

    use Avalonia\DevToolsExtensions;
    use Avalonia\Input\TappedEventArgs;
    use Peachpie\Avalonia\Controls\UxContentControl;
    use Peachpie\Avalonia\Controls\UxListBox;
    use Peachpie\Avalonia\Controls\UxToggleButton;
    use Peachpie\Avalonia\Controls\UxWindow;
    use Peachpie\Base\Output\Logger;
    use System\Int32;
    use System\String;
    use System\Type;
    use Views\Pages\ButtonsPage;
    use Views\Pages\ColorZonePage;
    use Views\Pages\FieldsPage;
    use Views\Pages\HomePage;
    use Views\Pages\ProgressIndicatorsPage;

    class MainWindow extends UxWindow
    {
        public UxContentControl $PageView;
        public UxListBox $ItemMenu;

        public HomePage $HomePage;
        public ButtonsPage $ButtonsPage;
        public ColorZonePage $ColorZonePage;
        public FieldsPage $FieldsPage;
        public ProgressIndicatorsPage $ProgressIndicatorsPage;

        private int $propertyName;

        public UxToggleButton $BurgerButton;

        public function __construct()
        {
            $this->InitializeComponent();

            $this->PageView = $this->FindByName("PageView");
            $this->ItemMenu = $this->FindByName("ItemMenu");
            $this->BurgerButton = $this->FindByName("BurgerButton");


            $this->HomePage = new HomePage();
            $this->ButtonsPage = new ButtonsPage();
            $this->ColorZonePage = new ColorZonePage();
            $this->FieldsPage = new FieldsPage();
            $this->ProgressIndicatorsPage = new ProgressIndicatorsPage();

            $this->PageView->Content = $this->HomePage;

            Logger::Info("Hello Peachpie Avalonia!");

        }

        public function ItemMenu_OnTapped(object $sender, TappedEventArgs $e) : void {
            switch ($this->ItemMenu->SelectedIndex) {
                case 0:
                    $this->PageView->Content = $this->HomePage;
                    break;
                case 1:
                    $this->PageView->Content = $this->ButtonsPage;
                    break;
                case 2:
                    $this->PageView->Content = $this->ColorZonePage;
                    break;
                case 3:
                    $this->PageView->Content = $this->FieldsPage;
                    break;
                case 4:
                    $this->PageView->Content = $this->ProgressIndicatorsPage;
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