<?php

// ISSET and EMPTY

$user = 'dark';
if (isset($user)):
  echo "hello $user";
  unset($user);
endif;

$_SESSION['user'] = 'DARK';
$user = $_SESSION['user']??0;

if(empty($user)) {
  echo "Гость";
} else echo "$user";

?>