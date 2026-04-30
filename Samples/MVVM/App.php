<?php
namespace {

    use Avalonia\Application;
    use Avalonia\Controls\ApplicationLifetimes\IClassicDesktopStyleApplicationLifetime;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use ViewModels\MainWindowViewModel;
    use Views\MainWindow;

    class App extends Application
    {
        private MainWindowViewModel $mainViewModel;

        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
            $this->mainViewModel = new MainWindowViewModel();
        }

        public function OnFrameworkInitializationCompleted() : void {
            $main = new MainWindow();
            $main->DataContext = $this->mainViewModel;
            $this->ApplicationLifetime->MainWindow = $main;

            if ($this->ApplicationLifetime instanceof IClassicDesktopStyleApplicationLifetime) {
                $this->ApplicationLifetime->ShutdownRequested->add(function ($sender = null, $eventArgs = null): void {
                    $this->mainViewModel->SaveItems();
                });
            }

            parent::OnFrameworkInitializationCompleted();
        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj:$this);
        }
    }
}
