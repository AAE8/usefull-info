<?php

strtotime('now');
strtotime('10 September 2000');
strtotime('+1 week');

$date_m = strtotime('next Monday');
echo "Следующий пн будет: ", date('d-m-y',$date_m)

?>