<?php

abstract class car{
    public $name;

    function __construct($name){
       $this->name=$name;
    }

    abstract public function show_name();
}

class toyota extends car{
    public function show_name(){
        echo "the name of car is " . $this->name . "<br>";
    }
}

$toyota = new toyota("toyota");
$toyota->show_name();


abstract class parentClass{
    abstract public function age($age);
}

class childClass extends parentClass{
    public $age;
   function age($age){
      $this->age = $age;
      if($age >= 18 ){
          $eligiblity= "you are eligible for voting" . "<br>";
      }else{
          $eligiblity= "you are not eligible for voting" . "<br>";
      }
      return $eligiblity;
   }
}

$imran = new childClass();
echo $imran->age(20);

$subhan = new childClass();
echo $subhan->age(5);
?>