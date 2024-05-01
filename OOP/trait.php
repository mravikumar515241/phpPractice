<?php

trait message1{

    public function message(){
        echo "Trait Example";
    }
}
class Myclass{

    use message1;
}
$obj = new Myclass();
$obj->message();

?>