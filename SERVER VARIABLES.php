<?php
// Дерево документа
echo $_SERVER['DOCUMENT_ROOT']."<br>";
// Некие параметры относительно типа документа
echo $_SERVER['HTTP_ACCEPT']."<br>";
// Предпочтения клиента касательно языка
echo $_SERVER['HTTP_ACCEPT_LANGUAGE']."<br>";
// Получение хоста
echo $_SERVER['HTTP_HOST']."<br>";
// Ссылка откуда мы пришли на страницу
echo $_SERVER['HTTP_REFERER']."<br>";
// Тип браузера и операционной системы
echo $_SERVER['HTTP_USER_AGENT']."<br>";
// Возвращается IP-адрес клиента
echo $_SERVER['REMOTE_ADDR']."<br>";
// Абсолютный путь исполняемого файла
echo $_SERVER['SCRIPT_FILENAME']."<br>";
// хранится имя сервера / домен
echo $_SERVER['SERVER_NAME']."<br>"; // /blog/page.html;
// считываем метод запроса
echo $_SERVER['REQUEST_METHOD']."<br>";
// считываем параметры из адресной строки
echo $_SERVER['QUERY_STRING']."<br>";
// полный URL
echo $_SERVER['REQUEST_URI']."<hr>";

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
?>