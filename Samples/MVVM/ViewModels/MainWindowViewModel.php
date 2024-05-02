<?php

namespace ViewModels;

use Models\TodoItem;
use Peachpie\Base\Output\Logger;
use Services\ToDoListService;

class MainWindowViewModel extends ViewModelBase
{
    function __construct()
    {
        $service = new ToDoListService();
        $this->_toDoList = new ToDoListViewModel($service->GetItems());

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
        $this->set_ContentViewModel(new AddItemViewModel());
    }

    private ToDoListViewModel $_toDoList;
    private ViewModelBase $_contentViewModel;
}