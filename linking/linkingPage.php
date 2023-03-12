<?php
date_default_timezone_set('Europe/Moscow');
$current_time = date("H:i:s");

echo "<a href='linkedPage.php?login=Adam&password=1234&time=".$current_time."'>ссылка</a>";


?>