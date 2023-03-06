<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul class="menu">
    <li><a href="?name=blog">Blog</a></li>
    <li><a href="?name=shop">Shop</a></li>
    <li><a href="?name=about">About</a></li>
  </ul>
  <div class="content">
    <?php
    $site_name = $_GET['name']??'0';
    switch ($site_name){
      case 'blog':
        require_once "blog.php";
        break;
      case 'shop':
        require_once "shop.php";
        break;
      case 'about':
        require_once "about.php";
        break;
      default:
        echo "страница по умолчанию";
      }
    ?>
  </div>
</body>
</html>

