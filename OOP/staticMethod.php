<?php
class Welcome1{
    public static function greet(){
        echo "Good Afternoon<br>";
    }
    public static function greet1(){
        echo "Good Evening<br>";
    }
    public function __construct()
    {
        self::greet1(); //class itself calling 
        self::greet();
    }
}
Welcome1::greet();
new Welcome1();
?>