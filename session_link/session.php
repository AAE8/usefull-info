<?php
session_start();

$sName = htmlspecialchars($_POST['username']);

$_SESSION['username'] = $sName;

echo "Здравствуйте $sName";





?>