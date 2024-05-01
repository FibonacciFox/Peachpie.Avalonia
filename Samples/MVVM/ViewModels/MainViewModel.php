<?php

namespace ViewModels;

use Models\TodoItem;
use Services\Database;
use Peachpie\Base\Collections\ObjectModel\ObservableCollection;
class MainViewModel extends ViewModelBase
{
    private ObservableCollection $listItems;

    public function __construct()
    {
        $database = new Database();
        $this->listItems = new ObservableCollection();

        foreach ($database->GetItems() as $key => $value) {
            $this->listItems->Add($value);
        }
    }

    public function ButtonClickedCommand() : void
    {
        $tditem = new TodoItem(date('d.m.Y H:i:s'), false);
        $this->get_ListItems()->Add($tditem);
    }

    public function get_ListItems() : ObservableCollection
    {
        return $this->listItems;
    }

}