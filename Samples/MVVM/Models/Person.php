<?php

namespace Models;

class Person
{
    private \System\String $name;
    
    public function get_Name() : \System\String {
        return $this->name;
    }

    public function set_Name(\System\String $value) : void {
        $this->name = $value;
    }
}