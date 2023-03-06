<?php

$name = 'Iphone';
$price = 31333;
$priceWithDiscount = $price - ($price / 100 * 20);

echo "Название товара: $name", "<br>";
echo "Цена товара: $price", "<br>";
echo "Цена товара со скидкой: ", $priceWithDiscount, "<br>";
echo "Включая стоимость доставки 500 р: ", $priceWithDiscount + 500, "<br>";



?>

