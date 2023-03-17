<?php
// echo $_FILES['filename']['size'] . '<br>'; // размер в байтах
// echo $_FILES['filename']['name'] . '<br>'; // имя
// echo $_FILES['filename']['tmp_name'] . '<br>'; // весь путь и имя
// перемещение файла в папку temp

// 1 килобайт kb = 1024 байта b и 1 mb = 1024 kb

if ($_FILES['filename']['size'] > 2 * 1024 * 1024) {
    exit ('Размер файла превышает 2 мегабайта');
} else {
    if(move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/' . $_FILES['filename']['name'])) {
    echo "Файл скопирован на сервер<hr>";
    echo 'Характеристики нашего файла:<br>';
    echo 'Имя файла: ';
    echo $_FILES['filename']['name'] . '<br>';
    echo 'Размер файла: ';
    echo $_FILES['filename']['size'] . '<br>';
    echo 'Тип файла: ';
    echo $_FILES['filename']['type'] . '<br>';
} else {
    echo "Файл не загружен";
}
}

?>