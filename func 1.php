<?php

function foo_sum (float $a=10,int $b=10) {
    return $a+$b;
  }

function foo_change(){ // &$x - жесткая ссылка. Будет менять глобальную переменную
    global $x; // второй способ слияния областей видимости
    $x.=" рублей";
    return $x;
  }

  // константы доступны в обеих областях видимости

function show_login() {
    return LOGIN;
  }

  //  Static переменная сохраняет свое значение даже после выхода из блока, в котором она определена

function count_up(){
    static $count=0;
    $count++;
    echo "Счет: $count<br>";
  }

?>