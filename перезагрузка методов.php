<?php
// Перезагрузка методов
// метод родительского класса заменяется методом дочернего класса 

class Base{
    public function starts(){
        echo "Я метод родительского класса";
    }
}

class Second extends Base{
    public function starts(){
        parent::starts() . "<br>";
        echo "Я метод дочернего класса";
    }
}

$obj = new Second();
$obj->starts();

?>