<?php
namespace {

    use Avalonia\Application;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
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
            AvaloniaXamlLoader::Load(obj:$this);
        }
    }
}