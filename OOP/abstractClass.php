<?php
abstract class Fruit4
{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function fruitname(): string;
}
class Banana extends Fruit4{
    function fruitname(): string
    {
        return "The friut is {$this->name}";
    }
}
class Kiwi extends Fruit4{
    function fruitname(): string
    {
        return "The friut is {$this->name}";
    }
}
class Apple extends Fruit4{
    function fruitname(): string
    {
        return "The friut is {$this->name}";
    }
}
$banana = new Banana("Banana");
$kiwi = new Kiwi("Kiwi");
$apple  = new Apple("Apple");
echo $banana->fruitname()."<br>";
echo $kiwi->fruitname()."<br>";
echo $apple->fruitname()."<br>";