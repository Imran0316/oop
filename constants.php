<?php

class welcome {
    const welcome_message = "welcome to object oriented php" . "<br>";
}

echo welcome::welcome_message;

class goodby {
    const leaving_message = "Thanks for learning php ";

    function show_const(){
        echo self::leaving_message;
    }
}
$goodby = new goodby();
$goodby->show_const();
?>