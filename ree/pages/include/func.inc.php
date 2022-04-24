<?php

$user = 'root';
$pass = '';
$db = '4353db1';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "great work !!!";

function emptyInput($username, $password, $confirmPassword){
#//$result;

if(empty($username) || empty($password) || empty($confirmPassword)){
$result=true;
}

else{
$result=false;
}
return $result;
}

function invalidUser($username){
#//$result;
if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    $result=true;
}
else
{
$result=false;
    }
return $result;
}

function invalidPwd($password){
#//$result;
if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]\d{10})./", $password)){
$result=true;
}
else
{
$result=false;
}
return $result;
}       

function mismtchPwd($password, $confirmPassword){
#//$result;
if($password!== $confirmPassword){
$result=true;
    }
else
{
$result=false;
}
return $result;
}

function existUser($mysqli, $username){
    $sql = "SELECT * FROM username WHERE username = ?;";
    $stmt= mysqli_stmt_init($mysqli);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../ registration.php?error=badstatement");
    exit();
}

mysqli_stmt_bind_param($stmt, "ss", $username);
mysqli_stmt_execute($stmt);

$newDat=mysqli_stmt_get_result($stmt);
if($row=mysqli_fetch_assoc($newDat)){
return $row;   
}
    else
{
    $result= false;
    return $result;
}
mysqli_stmt_close($stmt);
}

function createUser($mysqli, $username, $password){
username(usernameid, username, userPassword, confPwd, users_users_id)  values(2, 'user1', 'pass1', 'pass1', 45)"
    $sql = "INSERT INTO username(usernameid, username,userPassword, confPwd) VALUES(6,?,?,?)";
    $stmt= mysqli_stmt_init($mysqli);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../ registration.php?error=badstatement");
    exit();
}

$hashedPassword= password_hash($password, PASSWORD_DEFAULT);

mysqli_stmt_bind_param($stmt, "sss",$confirmPassword,$username, $hashedPassword);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

header("location../Login_pg.php?error=none");
exit();
}


?>