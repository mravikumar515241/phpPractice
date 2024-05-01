<?php

class Fruit2{
    public $name;
    public $color;

    function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){
        echo "The Fruit is {$this->name} and The color is {$this->color} ";
    }
}

//Kiwi is inherited from Fruit
class Kiwi extends Fruit2{

    function message(){
        echo "Which fruit I am ? <br>";
    }
}

// Try to call all three methods from outside class
$kiwi = new Kiwi("Kiwi","Green");
$kiwi->message();
//$kiwi->intro();

?>