<?php 

// interface Animal{
//     public function makeSound();

// }

// class cat implements Animal{
//     public function makeSound(){
//         echo "meow";
//     }
// }

// $cat = new cat();
// echo $cat->makeSound();

interface Animal{
    public function makeSound();
}
class cat implements Animal{
    public function makeSound(){
        echo " meow";
    }

}
class dog implements Animal{
    public function makeSound(){
        echo " bark";
    }

}
class mouse implements Animal{
    public function makeSound(){
        echo " squeak";
    }

}


$cat = new cat();
$dog = new dog();
$mouse = new mouse();

$animals=array($cat,$dog,$mouse);

foreach($animals as $animal){
   echo $animal->makeSound() . "<br>";
}
?>