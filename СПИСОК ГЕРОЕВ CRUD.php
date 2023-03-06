<?php
define("SERVERNAME","localhost");
define("DB_LOGIN","root");
define("DB_PASSWORD","");
define("DB_NAME","new_db");

$name=$age=$rank='';

$connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
// $sql = "SELECT * FROM `heroes` WHERE `name`='Ведьмак'";
$sql = "SELECT * FROM `heroes`";
$result = $connect->query($sql);
// Для корректного вывода превращаем объект в массив с помощью функции fetch_assoc()
// Для вывода всей таблицы fetch_assoc() не подойдет
//$user = $result->fetch_assoc();
// print_r($user);
// Для вывода всех персонажей - ассоциативного массива используем цикл for
for($user=array();$row=$result->fetch_assoc();$user[]=$row);
//print_r($user);
$connect->close();

$last=count($user)-1;
$last_id=$user[$last]['id']+1;
//echo $last;
//echo $last_id;

if(isset($_POST['add_heroes'])){
  $name = $_POST['name']??'0';
  $age = $_POST['age']??'0';
  $rank = $_POST['rank']??'0';
  $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
  $sql = "INSERT INTO `heroes`(`id`,`name`,`age`,`rank`) VALUES ('$last_id','$name','$age','$rank')";
  $connect->query($sql);
  $connect->close();
  header("Location: /");
}
/*
foreach ($user as $k=>$v){
  echo "$k : $v ";
}
*/

if(isset($_GET['change'])){
  $id=$_GET['change']??'';
  $name=$user[$id]['name']??'';
  $age=$user[$id]['age']??'';
  $rank=$user[$id]['rank']??'';
  $id_base=$user[$id]['id']??'';
}

if(isset($_POST['edit_heroes'])){
  $name = $_POST['name']??'0';
  $age = $_POST['age']??'0';
  $rank = $_POST['rank']??'0';
  $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
  $sql = "UPDATE `heroes` SET `name`='$name',`age`='$age',`rank`='$rank' WHERE `id`='$id_base'";
  $connect->query($sql);
  $connect->close();
  header("Location: /");
}

if(isset($_POST['delete_heroes'])){
  $connect = new mysqli(SERVERNAME,DB_LOGIN,DB_PASSWORD,DB_NAME);
  $sql = "DELETE FROM `heroes` WHERE `id`='$id_base'";
  $connect->query($sql);
  $connect->close();
  header("Location: /");
}

?>

<form action="#" method="POST">
  <input type="text" name="name" placeholder="name" id="" value="<?=$name?>">
  <input type="number" name="age" placeholder="age" id="" value="<?=$age?>">
  <input type="number" name="rank" placeholder="rank" id="" value="<?=$rank?>">
  <input type="submit" value="add heroes" name="add_heroes">
  <?php if(isset($_GET['change'])): ?>
  <input type="submit" value="Edit" name="edit_heroes">
  <input type="submit" value="Delete" name="delete_heroes">
  <?php endif; ?>
</form>

<?
foreach ($user as $k=>$v){
  echo "<p>$v[id] | $v[name] | age: $v[age] | rank $v[rank] <a href='?change=$k'>Select</a></p>";

}
?>