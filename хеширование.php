<?php
// Хеширование/шифрование
// md5 для шифрования пароля устарел, потому что хеш повторяется
echo md5("123456"), "<br>";
echo md5("123456"), "<br>";
echo password_hash("123456", PASSWORD_DEFAULT), "<br>"; // 255 символов надо указывать в базе данных

?>