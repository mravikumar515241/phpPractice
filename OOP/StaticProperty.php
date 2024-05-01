<?php

class PiValue{

    public static $value = 3.14;
    public function staticValue(){
        return self::$value;
    }
}

$pi = new PiValue();
echo $pi->staticValue();

?>