<?php

  require_once ('func 1.php');

  echo foo_sum("12.3",12). "<br>";

  $x = 500;
  $y = 1200;
  echo foo_change(),"<br>";
  echo $x,"<br>", $y,"<br>";

  // константы доступны в обеих областях видимости

  define("LOGIN",'admin');

  echo show_login(),"<br>";

  count_up();
  count_up();

?>