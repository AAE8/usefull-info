<?php
// наследование в ООП

class Base{
    public $one;
    private $test; // не наследуется из-за приватности
    protected $secret; // не доступна в глобальном скопе, но доступна у преемственных классов
    public function __construct($secret){
        $this->secret=$secret;
    }
    public function printer(){
        echo $this->one;
    }
    // private function test(){
    //     echo 'test2';
    // }
    // недоступный метод выдаст только ошибку
}

class NewClass extends Base{
    public $two;
    public function __construct($secret){
        $this->secret=$secret;
    }
    public function bye(){
        echo $this->two;
    }
    public function unset($two){
        echo "unset применен";
    }
}

$obj = new NewClass($two);

echo "<pre>";
print_r($obj);
echo "</pre>";

$obj->one = 'Andrey';
$obj->two = 'Bye';
$obj->test = 'Test';
// $obj->test();

$obj->printer();
echo "<br>";
$obj->bye();
$obj->unset();
$obj->bye();

?>