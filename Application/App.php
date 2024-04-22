<?php

use Views\MainWindow;
use Peachpie\Avalonia\UxApplication;

class App extends UxApplication
{
    public function __construct()
    {
        $this->InitializeComponent(); 
    }

    public function OnFrameworkInitializationCompleted(): void
    {
        //Desktop
        if ($this->IsClassicDesktopStyleApplicationLifetime()) {
            $this->ApplicationLifetime->MainWindow = new MainWindow();
        }

       //Mobile
       // if ($this->IsSingleViewApplicationLifetime()) {
       //     $this->ApplicationLifetime->MainView = new MyControl();
       // }

        parent::OnFrameworkInitializationCompleted();
    }

    private function InitializeComponent(): void
    {
         Load();
    }
  
}
