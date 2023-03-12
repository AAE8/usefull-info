<?php
    require_once 'decodingJSON.php';

    $arr = [
        'name' => 'Adam',
        'fname' => 'Adamov',
        'age' => 25
    ];
    
    $ser = json_encode($arr);

    $open = fopen("json.txt",'w');

    fwrite($open,$ser);

    fclose($open);
?>