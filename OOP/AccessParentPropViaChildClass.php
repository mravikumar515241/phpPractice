
<?php
class Pi
{
    public static $Pi =  3.14;
}
class x extends Pi
{
    public function xStatValue()
    {
       return parent::$Pi;
    }
}

echo x::$Pi."<br>";
echo Pi::$Pi."<br>";

$x = new x();
echo $x->xStatValue();


?>