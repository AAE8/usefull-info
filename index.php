<?php
// task OOP PHP
class Human{
    public $name;
    public $gender;
    public $age;
    public $hobby = [];
    protected $naw_time;

    public function wakeUp(){
        echo "Просыпаемся";
    }
    public function asleep(){
        echo "Идем спать";
    }
    public function __construct(){
        $this->naw_time = date("H");
    }
}

class Person extends Human{
    public function cleanT(){
        echo "Идем чистить зубы";
    }
    public function work(){
        echo "Идем на работу";
    }
    public function lunch(){
        echo "Идем обедать";
    }
    public function home(){
        echo "Идем домой";
    }
    public function dinner(){
        echo "Идем ужинать";
    }
    public function asleep(){
        parent::asleep();
    }
    public function __construct(){
        if($this->naw_time >= 7 & $this->naw_time <= 8){
            $this->wakeUp();
        } elseif($this->naw_time > 9 & $this->naw_time <= 10){
            $this->cleanT();
        } elseif($this->naw_time > 11 & $this->naw_time <= 15){
            $this->work();
        } elseif($this->naw_time > 16 & $this->naw_time <= 17){
            $this->lunch();
        } elseif($this->naw_time > 18 & $this->naw_time <= 19){
            $this->work();
        } elseif($this->naw_time > 20 & $this->naw_time <= 21){
            $this->home();
        } elseif($this->naw_time > 22 & $this->naw_time <= 23){
            $this->dinner();
        } else {
            $this->asleep();
        }
    }
}

$obj = new Person;

echo date("H");



?>
