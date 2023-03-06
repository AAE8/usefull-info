<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  { 
    echo "Some text";
    echo "<br>";
    // каждое выражение заканчивается точкой с запятой
  ?>
  <h2>Заголовок второго уровня</h2>
  <?php
    echo date(DATE_RSS);
    echo $_SERVER['HTTP_USER_AGENT'];
    // составные выражения обрамляются фигурными скобками
    // составное выражение может прерываться HTML например
    // в классах нельзя разбивать тегами состоавное выражение
    // формат форматирования - PSR-2
  }
  ?>
</body>
</html>