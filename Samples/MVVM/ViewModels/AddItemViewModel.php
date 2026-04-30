<?php

namespace ViewModels;

class AddItemViewModel extends ViewModelBase
{
    private string $_description = "";
    private mixed $_submit;
    private mixed $_cancel;

    public function __construct(callable $submit, callable $cancel)
    {
        $this->_submit = $submit;
        $this->_cancel = $cancel;
    }

    public function get_Description(): \System\String
    {
        return $this->_description;
    }

    public function set_Description(\System\String $description): void {
        $this->_description = $description;
        $this->OnPropertyChanged();
    }

    public function Ok(): void {
        ($this->_submit)($this->_description);
    }

    public function Cancel(): void {
        ($this->_cancel)();
    }
}
