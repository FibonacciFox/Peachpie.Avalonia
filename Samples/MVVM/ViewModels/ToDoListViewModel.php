<?php

namespace ViewModels;


use Php\Collections\ObservableCollection;

class ToDoListViewModel extends ViewModelBase
{
    private ObservableCollection $listItems;

    public function __construct( array $Items )
    {
        $this->listItems = new ObservableCollection($Items);
    }

    public function get_ListItems() : ObservableCollection
    {
        return $this->listItems;
    }

}