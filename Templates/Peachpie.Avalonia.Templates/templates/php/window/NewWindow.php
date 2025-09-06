<?php

use Avalonia\Controls\Window;
use Avalonia\Markup\Xaml\AvaloniaXamlLoader;

class NewWindow extends Window
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

