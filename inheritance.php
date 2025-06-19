<?php
//INHERITANCE

// The child class will inherit all the public and protected properties and methods of parent class. in addition, it can have its own properties and methods.

// we use 'extends' keyword for inheritance.

class vegetable{
    public $name;
    public $color;

    function __construct($n,$c){
      $this->name=$n;
      $this->color=$c;
    }

    function __destruct(){
        echo "The color of " . $this->name . " is " . $this->color . "<br>";
    }
}

class tomato extends vegetable{
    
}


$tomato = new tomato("Tomato","red");




class car{
    public $name;
    public $color;

    function __construct($n,$c){
    $this->name=$n;
    $this->color=$c;
    }

    protected function intro(){
        echo "The color of " . $this->name . " is " . $this->color . "<br>";
    }
}

class truck extends car{
    function message(){
        echo "this is truck class" . "<br>";
        $this->intro();
    }
}

$jac = new truck("Jac","yello");
//$jac->intro();     Here its showing error because of protected method.
$jac->message();


?>