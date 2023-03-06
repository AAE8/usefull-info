
<style>
  input(margin-bottom: 20px;)
</style>
<!-- По умолчанию отправляется GET запрос -->
<form action="#" method ="POST">
<input type="text" name="name" id="" placeholder="Введи имя"><br>
<label for="check">Мне уже есть 18 лет</label>
<input type="checkbox" name="age" id="check"><br>
<input type="submit" name="submit" value="Вход">
</form>

<?php

// print_r($_POST); 

if(isset($_POST['submit'])){
  $name = trim($_POST['name']);
  if(!preg_match('&^[a-zA-Za-яА-ЯёЁ]+$&u',$name)){
    exit ('имя не корректно');
  }
  $age_check = $_POST['age']??'0';
  if($age_check == 'on'){
    echo "$name доступ разрешен";
  } else echo "$name Вам нет 18 лет";
}

?>