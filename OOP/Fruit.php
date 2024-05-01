<?php

class Fruit
{

    //properties

    public $color;
    public $name;

    //methods

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }

}
$apple = new Fruit();
$banana = new Fruit();
$orange = new Fruit();


$apple->set_name("Apple");
$apple->set_color("Red");
$banana->set_name("Banana");
$banana->set_color("Yellow");
$orange->name="Orange"; //Setting Fruit Name Outside the Class with  directly changing property value;


echo "Name : " . $apple->get_name() . " Color : " . $apple->get_color() . "<br>";
echo "Name : " . $banana->get_name() . " Color : " . $banana->get_color() . "<br>";
echo $orange->name;
