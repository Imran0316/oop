<?php
//A destructor is called when the object is destructed or the script is stopped or exited.

class fruit{
    public $name;
    public $color;

    function __construct($name ,$color){
         $this->name = $name;
         $this->color = $color;
    }

    function __destruct(){
        echo "the color of " . $this->name . " is " . $this->color;
    }
}

$apple = new fruit("apple","red")
?>