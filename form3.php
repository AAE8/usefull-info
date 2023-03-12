<?php
// if (empty($_POST['name'] === true) && empty($_POST['age'] === true))

// if (empty($_POST['name']) && empty($_POST['age']))

// if (empty($_POST['name'] === true) && empty($_POST['age'] === true)) {
//     exit('Одно либо два поля не заполнены');
// } else {
//     $name = htmlspecialchars($_POST['name']);
//     $age = htmlspecialchars($_POST['age']);
// }
//     echo "Здравствуйте $name. " . "Ваш возраст: $age.";

if (!empty($_POST)) {
    if (empty($_POST['name'])) {
        $errors[] = 'Поле name пустое';
    } else if (!empty($_POST['name'])) {
        $name = $_POST['name'];
        $arr = preg_split("//u", $name , -1, PREG_SPLIT_NO_EMPTY);
        foreach ($arr as $key=>$value) {
            if (is_numeric($value)) {
            $errors[] = "Введенный Вами символ в поле name под номером №" . ($key+1) . " не является буквой";
            }
        }
    }

    if (!empty(is_string($_POST['name']))) {
        $result[] = $_POST['name'];
    }


    if (empty($_POST['age'])) {
        $errors[] = 'Поле age пустое';
    } else if (!is_numeric($_POST['age'])) {
        $errors[] = 'Поле age должно содержать цифры';
    } else {
        $result[] = $_POST['age'];
    }

    if (empty($_POST['password'])) {
        $errors[] = 'Поле password 
        пустое';
    } else {
        $result[] = $_POST['password'];
    }

    if(!empty($errors)) {
        foreach ($errors as $err) {
            echo "<strong>$err</strong><br>";
        }
    }

    if(!empty($result) === true && empty($errors)) {
        foreach ($result as $res) {
            echo $res . "<br>";
        }
    }

    if(!empty($result) === true && empty($errors)) {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
}

?>