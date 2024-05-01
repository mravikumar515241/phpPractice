<?php

class Bye{
    const LEAVE_MESSAGE= "Thank You all GoodBye <br>";

    public function byebye() {
        echo self::LEAVE_MESSAGE;
      }
}

echo Bye::LEAVE_MESSAGE;
$bye = new Bye();
$bye->byebye();
?>