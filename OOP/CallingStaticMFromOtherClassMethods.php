<?php

class A{
    public static function method1(){
        echo "Method1 Called <br>";

    }
}
class B {
    public function method2(){
        A::method1();
    }
}

$obj = new B();
$obj->method2();

?>