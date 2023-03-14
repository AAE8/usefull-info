<?php
echo $_FILES['filename']['size'] . '<br>'; // размер в байтах
echo $_FILES['filename']['name'] . '<br>'; // имя
echo $_FILES['filename']['tmp_name'] . '<br>'; // весь путь и имя
// перемещение файла в папку temp
if(move_uploaded_file($_FILES['filename']['tmp_name'], temp)) {
    echo "Файл скопирован на сервер";
} else {
    echo "Файл не скопирован на сервер";
} 

?>