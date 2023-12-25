<?php

namespace ViewModels;

use Peachpie\Avalonia\Collections\UxObservableDictionary;

class Form1ViewModel extends UxObservableDictionary
{
    public function __construct()
    {
        $this["Name"] = "Avalonia PHP";
    }
}