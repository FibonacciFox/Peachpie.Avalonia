<?php

use Views\Form1;
use ViewModels\Form1ViewModel;
use Peachpie\Avalonia\UxApplication;
use Views\MyControl;
use  Avalonia\Themes\Fluent\FluentTheme;


class App extends UxApplication
{
    public function __construct()
    {
        //Сначала всегда инициализируем axaml.
        $this->InitializeComponent();

    }

    public function OnFrameworkInitializationCompleted(): void
    {
        //Desktop
        if ($this->IsClassicDesktopStyleApplicationLifetime()) {
            $form1 = new Form1();
            $this->ApplicationLifetime->MainWindow = $form1;
        }

        //Mobile
        if ($this->IsSingleViewApplicationLifetime()) {
            $this->ApplicationLifetime->MainView = new MyControl();
        }

        parent::OnFrameworkInitializationCompleted();
    }

    public function InitializeComponent(): void
    {
         Load();
    }
    
    
}
