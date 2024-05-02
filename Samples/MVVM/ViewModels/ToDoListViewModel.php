<?php

namespace ViewModels;

use Peachpie\Base\Collections\ObjectModel\ObservableCollection;

class ToDoListViewModel extends ViewModelBase
{
    private ObservableCollection $listItems;

    public function __construct( array $Items )
    {
        $this->listItems = new ObservableCollection();

        $this->listItems->SetAll($Items);
    }

    public function get_ListItems() : ObservableCollection
    {
        return $this->listItems;
    }

}