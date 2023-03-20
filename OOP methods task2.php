<?php
// task 1.2. Создайте класс-обертку для сессии, метод set () которого позволяет устанавливать значение сессии, get () считывать ранее установленное значение, listKeys () выводит список всех установленных ключей, а existsKey() проверяет наличие ключа в сессии .
session_start();

class Ses {
    public $array;
    public function set($key,$value){
        $this->array[$key] = $value;
        $_SESSION[$key] = $value;
    }

    public function get(){
        foreach ($this->array as $key => $value){
            echo "{$key}:{$value}<br>";
        }
    }

    public static function list_keys(){
        foreach ($_SESSION as $key=>$value){
            echo "{$key}:{$value}<br>";
        }
    }

    public static function existsKey($key){
        if(isset($_SESSION[$key])){return "yes";}
        else {return "no";}
    }
}

$ses_now = new Ses();
$ses_now->set("Nige",2);
$ses_now->set("Art",1);
$ses_now->get();
echo "<hr>";
$ses_now::list_Keys();
echo $ses_now::existsKey("Art") . "<br>";
echo $ses_now::existsKey("Art0");

?>