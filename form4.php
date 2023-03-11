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
        $result[] = "<b>ФИО:</b><br>" . $_POST['name'];
    }


    if (empty($_POST['age'])) {
        $errors[] = 'Поле age пустое';
    } else if (!is_numeric($_POST['age'])) {
        $errors[] = 'Поле age должно содержать цифры';
    } else {
        $result[] = "<b>Возраст:</b><br>" . $_POST['age'];
    }

    if (empty($_POST['education'])) {
        $errors[] = 'Поле education пустое';
    } else {
        $result[] = "<b>Образование:</b><br>" . implode("<br>",$_POST['education']);
    }

    if (empty($_POST['gender'])) {
        $errors[] = 'Поле gender пустое';
    } else {
        $result[] = "<b>Пол:</b><br>" . $_POST['gender'];
    }

    if (empty($_POST['languages'])) {
        $errors[] = 'Поле languages пустое';
    } else {
        $result[] = "<b>Владение языками:</b>:<br>" . implode("<br>",$_POST['languages']);
    }

    
    if(!empty($result) === true && empty($errors)) {
        if (!empty($_POST['check'])) {
            if ($_POST['check'] === '4') {
                echo "Капча введена верно" . "<hr>";
                foreach ($result as $res) {
                    echo $res . "<br>";
                }
            } else {
                echo "Капча введена неверно" . "<hr>";
            }
        } else {
            $errors[] = 'Поле check пустое';
        }
        
    }

    if(!empty($result) === true && empty($errors)) {
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }

    if(!empty($errors)) {
        foreach ($errors as $err) {
            echo "<b>$err</b><br>";
        }
    }
}

?>