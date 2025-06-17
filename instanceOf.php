<?php

class city{
    public $name;
    public $country;

    function setName($n) {
        $this->name = $n;
    }
    function getName(){
        echo $this->name;
    }
}
// PHP uses a keyword instanceof to check if an object belongs to a particular class. Or its used to know whether an object is of specific class type.
$karachi = new city();
var_dump($karachi instanceof city);

?>