<?php

$user = 'root';
$pass = '';
$db = '4353db1';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "great work !!!";

if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword= $_POST['confirmPassword'];
   
    require_once'db.inc.php';
    require_once'func.inc.php';
   
    if (emptyInput($username,$password, $confirmPassword)!== false){
       header("location: ../ registration.php?error=emptyinput");
       exit();
    }
    if (invalidUser($username)!== false){
       header("location: ../ registration.php?error=invalidusername");
       exit();
   }
   
   if (invalidPwd($password)!==false){
       header("location: ../ registration.php?error=invalidpassword");
       exit();
   }
   if (mismtchPwd($password, $confirmPassword)!== false){
       header("location: ../ registration.php?error=mismatchedpassword");
       exit();
   }
   
   if (existUser($mysqli, $username)!== false){
       header("location: ../ registration.php?error=Existinguser");
       exit();
   }
   
   createUser($mysqli, $username, $password, $confirmPassword);
   
   }
   
   else {
       header("location: ../Login_pg.php");
       exit();
   }


?>