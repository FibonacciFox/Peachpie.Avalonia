<?php

namespace Models;

class TodoItem
{
    private string $description;
    private bool $isChecked;

    public function get_Description() : string {
        return $this->description;
    }
    public function set_Description(string $value) : void {
        $this->description = $value;
    }

    public function get_IsChecked() : bool {
        return $this->isChecked;
    }
    public function set_IsChecked(bool $value) : void {
        $this->isChecked = $value;
    }

    public function __construct(string $description, bool $isChecked = false)
    {
        $this->set_Description($description);
        $this->set_IsChecked($isChecked);
    }
}