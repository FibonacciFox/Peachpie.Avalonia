<?php
namespace {

    use Avalonia\Application;
    use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use ViewModels\MainViewModel;
    use Views\Main;

    class App extends Application
    {
        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
        }

        public function OnFrameworkInitializationCompleted() : void {

            $main = new Main();
            $main->DataContext = new MainViewModel();
            $this->ApplicationLifetime->MainWindow = $main;

        }

        public function InitializeComponent(): void
        {
            Load();
        }
    }
}