<?php

//Properties and methods can have access modifiers which contril where they can be accessed.

// There are three access modifiers:
// 1- PUBLIC: The property and method can be accessed from everywhere . it is default. 
// 2- PROTECTED: The property and method can be accessed within the class and by classes derived from that class.
// 3- PRIVATE: The proprty and method can be only accessed within the class.

class fruits{
    public $name;
    protected $color;
    private $weight;


}

$apple = new fruits();
$apple->name;
//$apple->color; ERRIR
//$apple->weight; ERROR


// Now adding access modifiers to methods

class vegetable{
    public $name;
    public $color;
    public $weight;

     function set_name($name){   // by default it is public 
      $this->name = $name;
    }

    protected function set_color($color){
        $this->color = $color;
    }

    private function set_weight($weight){
        $this->weight = $weight;
    }
}

$onion = new vegetable();
$onion->set_name("Onion");
//$onion->set_color("purple");  ERROR
//$onion->set_weight("1kg");   ERROR

?>