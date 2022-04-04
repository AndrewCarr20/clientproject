<?php

$serverAccess="localhost";
$usernameAccess="root";
$passwordAccess="";
$dbAccess= "4353db";

$conn= mysqli_connect($serverAccess, $usernameAccess, $passwordAccess, $dbAccess);

if(!$conn==false){
    die("Bad Connection: ". mysqli_connect_error());
}