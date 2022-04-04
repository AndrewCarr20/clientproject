<?php
$conn= mysqli_connect($serverAccess, $usernameAccess, $passwordAccess, $dbAccess);

if(!$conn==false){
    die("Bad Connection: ". mysqli_connect_error());
}
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
   
   if (existUser($conn, $username)!== false){
       header("location: ../ registration.php?error=Existinguser");
       exit();
   }
   
   createUser($conn, $username, $password, $confirmPassword);
   
   }
   
   else {
       header("location: ../Login_pg.php");
       exit();
   }