<?php
// Передача параметров методом GET

// echo $_GET['name'] . "<br>";
// echo $_GET['age'];

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// http://localhost/?name=andrei&age=31&page=02
// http://localhost/?id[]=999&id[]=888&page[]=01
// для работы следующий адрес неправильный
// http://localhost/?str=русское слово

echo "<a href='test.php?text=" . urlencode('Привет php!') . "'>ссылка</a>";

// возвращает массив
// parse_url(url);

$url = "https://user:admin@site.com/page/index.php?id=12&value=val#author";

$url = parse_url($url);

echo "<pre>";
print_r($url);
echo "</pre>";

echo $url['host'];
// scheme - префикс, например, http, htpps, ftp и т.п.
// host - домен;
// port - номер порта;
// user - пользователь;
// pass - его пароль;
// path - путь от корневого каталога;
// query - все, что расположено после символа вопроса (?);
// fragment - все, что расположено после символа#.

?>