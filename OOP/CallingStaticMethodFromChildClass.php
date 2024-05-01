<?php

class Parent1{
   
    protected static function getWebsitename(){
      return "google.com";
    }
}

class Child1 extends Parent1{
    public $websiteName;

    public function __construct()
    {
        $this->websiteName = parent::getWebsitename();
    }

}
$childObj =  new Child1();
echo $childObj->websiteName;
?>