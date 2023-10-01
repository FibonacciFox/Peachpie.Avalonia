<?php
namespace Application {

    use Application\Forms\Form1;
    use Avalonia\Application;
    use Avalonia\Markup\Xaml\AvaloniaXamlLoader;

    class App extends Application
    {
        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
        }

        public function OnFrameworkInitializationCompleted() : void {
            $this->ApplicationLifetime->MainWindow = new Form1();

        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }
}