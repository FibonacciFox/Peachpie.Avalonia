<?php

use Peachpie\Avalonia\Controls\UxWindow;
use Avalonia\Markup\Xaml\AvaloniaXamlLoader;

class NewWindow extends UxWindow
{
    public function __construct()
    {
        $this->InitializeComponent();  
    }

    public function InitializeComponent(): void
    {
        AvaloniaXamlLoader::Load(obj:$this);
    }
}

