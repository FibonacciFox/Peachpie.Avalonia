<?php

namespace ViewModels;

use Models\TodoItem;
use Services\ToDoListService;

class MainWindowViewModel extends ViewModelBase
{
    function __construct()
    {
        $this->_service = new ToDoListService();
        $this->_toDoList = new ToDoListViewModel(
            $this->_service->GetItems(),
            fn() => $this->SaveItems()
        );

        $this->_contentViewModel = $this->get_ToDoList();
    }

    public function get_ToDoList(): ToDoListViewModel {
        return $this->_toDoList;
    }

    public function get_ContentViewModel(): ViewModelBase {
        return $this->_contentViewModel;
    }

    private function set_ContentViewModel(ViewModelBase $viewModelBase): void {
        $this->_contentViewModel = $viewModelBase;
        $this->OnPropertyChanged("ContentViewModel");
    }

    public function AddItem(): void {
        $this->set_ContentViewModel(new AddItemViewModel(
            fn(string $description) => $this->CommitNewItem($description),
            fn() => $this->ShowList()
        ));
    }

    public function CommitNewItem(string $description): void {
        $description = trim($description);

        if ($description !== "") {
            $this->_toDoList->AddItem(new TodoItem($description));
            $this->SaveItems();
        }

        $this->ShowList();
    }

    public function RemoveItem(TodoItem $item): void {
        $this->_toDoList->RemoveItem($item);
    }

    public function ShowList(): void {
        $this->set_ContentViewModel($this->get_ToDoList());
    }

    public function SaveItems(): void {
        $this->_service->SaveItems($this->_toDoList->get_ListItems());
    }

    private ToDoListService $_service;
    private ToDoListViewModel $_toDoList;
    private ViewModelBase $_contentViewModel;
}
