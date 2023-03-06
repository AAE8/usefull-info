<?php
$file = "data.txt";

// Выводим все файлы txt с информацией о байтах

// $txt = glob("*.txt");
// foreach ($txt as $v) {
//   echo "$v - размер ". filesize($v)." байт<br>";
// }

function getFile($dir){
  $files = array_diff(scandir($dir),['..','.']);
  $result=[];
  foreach ($files as $file){
    $path=$dir.'/'.$file;
    if(is_dir($path)){
      $result = array_merge($result,getFile($path));
    } else {
      $result[]=$path;
    }
  }
  return $result;
}

//$arr = getFile('lol');
$arr = getFile('E:\OpenServer\domains\localhost');
print_r($arr);
?>