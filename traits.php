<?php

trait message1{
    public function msg1(){
        echo "I AM LEARNING OOP" . "<br>";
    }
}

class showmsg{
    use message1;
}

$show1 = new showmsg();
$show1->msg1();

trait fruits{
    public $name;
    public function fruit_name($name){
      $this->name = $name;
    }
}
trait vegetables{
    public $name;
    public function veg_name($name){
      $this->name = $name;
    }
}

class items{
    use fruits,vegetables;
}

$apple = new items();
$apple->fruit_name("apple");
echo $apple->name . "<br>";

$onion = new items();
$onion->veg_name("onion");
echo $onion->name . "<br>";
?>