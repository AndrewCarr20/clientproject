<?php

$user = 'root';
$pass = '';
$db = '4353db1';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "great work !!!";

?>