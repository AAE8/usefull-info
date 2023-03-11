<?php
    echo '<h1>JSON-формат</h1>';

    $arr = [
    'fio' => 'Ivanov Степан',
    'age' => 33,
    'vk_url' => 'https:/vk.com/id11111',
    'learn' => ['HTML', 'CSS', 'PHP']
];
// добавили второй атрибут и кирилица вывелась без декодирования
// второй флаг избавляет от лишних слэшей
// если мы хотим добавить несколько аттрибутов или флагов, пишем их через |
echo json_encode($arr, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "<br>";

// декодирование

$json = '{"people":"Сидоров Никита", "address":"Ленина, 23б", "phone":["0932145414","3521353125"]}';
// true - для работы с ассоциативными массивами
$arr2 = json_decode($json, true);

echo '<pre>';
print_r($arr2);
echo '</pre>';
?>