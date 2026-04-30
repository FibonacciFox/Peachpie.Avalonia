<?php

namespace {

    use Avalonia\Application;
    use Avalonia\Controls\ApplicationLifetimes\IClassicDesktopStyleApplicationLifetime;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
    use Views\MainWindow;

    class App extends Application
    {
        public function __construct()
        {
            $this->InitializeComponent();
        }

        public function OnFrameworkInitializationCompleted(): void
        {
            if ($this->ApplicationLifetime instanceof IClassicDesktopStyleApplicationLifetime) {
                $this->ApplicationLifetime->MainWindow = new MainWindow();
            }

            parent::OnFrameworkInitializationCompleted();
        }

        private function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load(obj: $this);
        }
    }
}
