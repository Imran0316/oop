<?php

class fruit {
    public $name;
    // public $color;

    function __construct($name){
      $this->name = $name;
    }

    function get_name(){
        echo $this->name;
    }
}

$apple = new fruit("apple");
echo $apple->get_name();

?>