<?php

use Views\Form1;
use ViewModels\Form1ViewModel;
use Peachpie\Avalonia\UxApplication;
use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;


class App extends UxApplication
{
    public function __construct()
    {
        //Сначала всегда инициализируем axaml.
        $this->InitializeComponent();
    }

    public function OnFrameworkInitializationCompleted(): void
    {

        $form1 = new Form1();
        $form1->DataContext = new Form1ViewModel();
        $this->ApplicationLifetime->MainWindow = $form1;

    }

    public function InitializeComponent(): void
    {
        AvaloniaXamlLoader::Load($this);
    }
}
