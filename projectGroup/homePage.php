<?php
session_start();


?>











<?php


$user = 'root';
$pass = '';
$db = '4353db7';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "great work !!!";


$Username = $_SESSION['username'];
$sql = "SELECT  users_users_id FROM username WHERE username =  '$Username'";

$result = mysqli_query($mysqli, $sql);

$employee_id = mysqli_fetch_assoc($result);

$_SESSION['users_id'] = $employee_id['users_users_id']; // connects two tables 
$e_id = $_SESSION['users_id'];




$sql2 = "SELECT fullname FROM username WHERE users_id = '$e_id'";

$result2 = mysqli_query($mysqli, $sql2);
$printname = mysqli_fetch_assoc($result2);
$_SESSION['username'] = $printname['username'];


echo 'welcome';


?>