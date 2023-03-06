<?php

// SWITCH

$lang = $_GET['lang']??"en";

switch ($lang) {
  case 'en':
    echo 'Hello World';
  break;
  case 'de':
    echo 'Hallo Welt!';
  break;
  case 'ru':
    echo 'Привет Мир';
  break;
  default:
    echo 'Данный язык не поддерживается';
  break;
}

?>

<div>
  <a href="?lang=ru">Русский</a>
  <a href="?lang=en">Английский</a>
  <a href="?lang=de">Немецкий</a>
</div>