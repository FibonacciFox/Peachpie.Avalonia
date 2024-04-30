<?php

namespace ViewModels;

use Avalonia\Threading\DispatcherTimer;
use Peachpie\Base\Output\Logger;
use System\TimeSpan;

class MainViewModel extends ViewModelBase
{
    private \System\String $name;
    
    public function __construct()
    {
      
        DispatcherTimer::Run( action: function() : bool {
            $this->set_Name("MVVM App - ".date("Y-m-d H:i:s"));
            return true;
        }, interval: TimeSpan::FromSeconds(1), priority: null);
        
    }

    public function get_Name() : \System\String {
        return $this->name;
    }

    public function set_Name(\System\String $value) : void {
        $this->name = $value;
        $this->OnPropertyChanged("Name");
    }

    public function ButtonClickedCommand() : void
    {
      $this->set_Name("ButtonClickedCommand");
    }
}