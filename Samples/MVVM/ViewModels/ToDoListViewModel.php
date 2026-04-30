<?php

namespace ViewModels;


use Models\TodoItem;
use Peachpie\Community\Collections\ObservableCollection;

class ToDoListViewModel extends ViewModelBase
{
    private ObservableCollection $listItems;
    private mixed $changed;

    public function __construct(array $Items, callable $changed = null)
    {
        $this->listItems = new ObservableCollection($Items);
        $this->changed = $changed;
    }

    public function get_ListItems() : ObservableCollection
    {
        return $this->listItems;
    }

    public function AddItem(TodoItem $item): void
    {
        $this->listItems->Add($item);
        $this->OnPropertyChanged("ListItems");
    }

    public function RemoveItem(TodoItem $item): void
    {
        $this->listItems->Remove($item);
        $this->OnPropertyChanged("ListItems");
        $this->NotifyChanged();
    }

    private function NotifyChanged(): void
    {
        if ($this->changed !== null) {
            ($this->changed)();
        }
    }
}
