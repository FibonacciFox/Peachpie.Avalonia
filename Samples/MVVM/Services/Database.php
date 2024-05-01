<?php

namespace Services;

use Models\TodoItem;

class Database
{
    public function GetItems() : array {
        return array(
            new TodoItem("Walk the dog"),
            new TodoItem("Buy some milk"),
            new TodoItem("Learn Avalonia", true)
        );
    }
}