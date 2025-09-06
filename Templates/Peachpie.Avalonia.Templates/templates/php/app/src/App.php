<?php

namespace PeachpieAvaloniaAppTemplate;

use Avalonia\Markup\Xaml\AvaloniaXamlLoader;
use Peachpie\Avalonia\UxApplication;
use PeachpieAvaloniaAppTemplate\Forms\MainWindow;

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

        parent::OnFrameworkInitializationCompleted();
    }

    private function InitializeComponent(): void
    {
        AvaloniaXamlLoader::Load(obj:$this);
    }

}
