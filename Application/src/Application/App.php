<?php
namespace Application {

    use Application\Views\Form1;
    use Application\ViewModels\Form1ViewModel;
    use Avalonia\Application;
    use Peachpie\Avalonia\Markup\Xaml\AvaloniaXamlLoader;

    class App extends Application
    {
        public function __construct()
        {
            //Сначала всегда инициализируем axaml.
            $this->InitializeComponent();
        }

        public function OnFrameworkInitializationCompleted() : void {

            $form1 = new Form1();
            $form1->DataContext = new Form1ViewModel();
            $this->ApplicationLifetime->MainWindow = $form1;

        }

        public function InitializeComponent(): void
        {
            AvaloniaXamlLoader::Load($this);
        }
    }
}