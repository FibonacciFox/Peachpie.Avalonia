<?php

use Peachpie\Avalonia\Controls\UxWindow;

class NewWindow extends UxWindow
{
    public function __construct()
    {
        $this->InitializeComponent();
        
    }

    public function InitializeComponent(): void
    {
        Load();
    }
}

