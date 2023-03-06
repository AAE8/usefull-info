<?php
$file = "data.txt";
//copy('data.txt','data2.txt');
// rename('data2.txt','noob.txt');
// unlink('noob.txt');

// Определяем размер байтов/килобайтов/мегабайтов
//  $size = filesize('img.jpeg')/1024/1024;
//  echo round($size,2);

// директории
/// доступы в Linux системах. Первая 7 - доступ на чтение, вторая 7 - доступ на запись, третья 7 - доступ на выполнение
//7 - файлы будут доступны всем
//6 - доступ у владельца и группы пользователей которые привязаны к файлу
//4 - доступ только у владельца
//mkdir('dir',0777);
// Третий параметр true нужен для создания в папке подпапки
//mkdir('lol/lol2',0777,true);
//rmdir('dir');
// $file = scandir("E:\OpenServer\domains\localhost");
// // очищение массива от лишних файлов
// $file = array_diff($file,['..','.']);
// print_r($file);

// Нашли файлы txt

// $txt = glob("*.txt");
// foreach ($txt as $v){
//   echo "$v - размер ". filesize($v)." байт<br>";
// }


?>