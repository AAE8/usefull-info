<?php
session_start();
// сессия сериализуется сама по себе
// в SESSION отправлять сериал. данные нельзя
$_SESSION['name'] = 'Andrey';
$_SESSION['arr'] = [1, '2', 'test'];

// КАК УДАЛИТЬ КУКИ КОТОРЫЕ ОТНОСЯТСЯ К СЕССИИ ПОСЛЕ ВСЕГО session_destroy();?
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

echo "Сессии";

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
// session.save_path

// прерывание части сессии
// прерывание всей сессии
unset($_SESSION['name']);
session_destroy();
// сессия прерывается на данные на странице сохраняются
// убрать данные можно командой:
$_SESSION = [];
// но куки не удаляются

echo '<pre>';
print_r($_SESSION);
echo '</pre>';
var_dump(session_destroy());


?>