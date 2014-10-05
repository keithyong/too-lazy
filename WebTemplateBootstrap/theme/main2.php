<?php
include_once 'registerdata.php';
$mysqli = new mysqli(HOST,USER,PASSWORD,DATABASE);
$name = $_POST['name'];
$pass = $_POST['Password'];
echo ($name);
echo ($pass)
?>

