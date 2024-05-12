<?php
namespace {

    use Avalonia\Application;
    use ViewModels\MainWindowViewModel;
    use Views\MainWindow;

    class App extends Application
    {
        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
        }

        public function OnFrameworkInitializationCompleted() : void {
            $main = new MainWindow();
            $main->DataContext = new MainWindowViewModel();
            $this->ApplicationLifetime->MainWindow = $main;
        }

        public function InitializeComponent(): void
        {
            Load();
        }
    }
}