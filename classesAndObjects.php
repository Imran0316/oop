<?php

class fruit{
 public $name;
 public $color;

 function set_name($n){
   $this->name = $n;
 }

 function set_color($c){
    $this->color = $c;
 }

 function get_name(){
    echo $this->name . "<br>";
 }

 function get_color(){
    echo $this->color;
 }
}

$apple = new fruit();
$apple->set_name("apple");
echo $apple->get_name();
$apple->set_color("red");
echo $apple->get_color();


?>