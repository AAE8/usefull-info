<?php
define("SERVERNAME","localhost");
define("DB_LOGIN","root");
define("DB_PASSWORD","");
define("DB_NAME","new_db");

$connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
$sql = "UPDATE `heroes` SET `age`=25 WHERE `name`='Харли Квин'";
if ($connect->query($sql)=== TRUE) {
  echo "record update";
} else echo "error record";
$connect->close();


?>