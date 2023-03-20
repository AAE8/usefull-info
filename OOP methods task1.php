<?php
// Методы

class Hi {
    public static function hello () {
        return 'Hello everybody';
    }

    public function bye () {
        return 'Bye';
    }
}

// $obj = new Hi;
// echo $obj->hello() . "<br>";
// echo $obj->bye() . "<br>";

// echo Hi::hello();

// ключевое слово self

class Page{
    static $main = 'content<br>';
    public static function header(){
        return 'header<br>';
    }

    public static function footer(){
        return 'footer<br>';
    }

    public static function getPage(){
        echo    self::header() .
                self::$main .
                self::footer(); 
    }
}

Page::getPage();

// $this относится к текущему объекту (экземпляр объекта),
// self относится к текущему классу,
// Класс - это проект объекта. Таким образом, вы определяете класс, но вы строите объекты

// this-> не может получить доступ к статическому методу или статическому атрибуту, мы используем self для доступа к ним

// task 1.1. Создайте класс с методом find () , принимающий единственный аргумент строку с названием функции РНР. В качестве результата метод должен возвращать текст с сайта http://php.net  с описанием функции.  

class Find{
    public static function find($func){
        echo file_get_contents("https://www.php.net/search.php?show=quickref&pattern={$func}");
    }
}

Find::find("file_get_contents");

?>