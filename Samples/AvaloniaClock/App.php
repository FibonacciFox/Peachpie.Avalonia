<?php

use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use Peachpie\Avalonia\UxApplication;
use Views\MainWindow;

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
        AvaloniaXamlLoader::Load(obj:$this);
    }
}
