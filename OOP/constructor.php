<?php

class Car{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function get_carname(){
        return $this->name;
    }
    function get_carcolor(){
        return $this ->color;
    }
}
$volvo = new Car("Volvo","Red");
echo $volvo->get_carname()." Color : ".$volvo->get_carcolor();

?>