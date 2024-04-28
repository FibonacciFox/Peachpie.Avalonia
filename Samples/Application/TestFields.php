<?php

use System\Int32;

class TestFields
{

    private int $propertyName;
    private Int32 $propertyName1;
    private string $propertyName2;
    private object $propertyName3;

    private static $Data ;

    ////////////////////Field Generate long///////////////////////////
    public function get_Property() : int
    {
        return $this->propertyName;
    }

    public function set_Property(int $value) : void {
        $this->propertyName = $value;
    }
    /////////////////////////////////////////////////////////////

    ////////////////////Field Generate int///////////////////////////
    public function get_Property1() : Int32
    {
        return $this->propertyName1;
    }

    public function set_Property1(Int32 $value) : void {
        $this->propertyName1 = $value;
    }
    /////////////////////////////////////////////////////////////

    ////////////////////Field Generate string///////////////////////////
    public function get_Property2() : \System\String
    {
        return $this->propertyName2;
    }

    public function set_Property2(System\String $value) : void {
        $this->propertyName2 = $value;
    }
    /////////////////////////////////////////////////////////////

    ////////////////////Field Generate object///////////////////////////
    public function get_Property3() : object
    {
        return $this->propertyName3;
    }

    public function set_Property3() : void {

    }
    /////////////////////////////////////////////////////////////

}