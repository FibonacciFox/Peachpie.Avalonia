<?php

namespace ViewModels;

class AddItemViewModel extends ViewModelBase
{
    private string $_description = "";

    public function get_Description(): \System\String
    {
        return $this->_description;
    }

    public function set_Description(\System\String $description): void {
        $this->_description = $description;
        $this->OnPropertyChanged();
    }
}