<?php
$conn= mysqli_connect($serverAccess, $usernameAccess, $passwordAccess, $dbAccess);

if(!$conn==false){
    die("Bad Connection: ". mysqli_connect_error());
}

if (isset($_POST["SUBMIT"])){
    echo "it works";
}

else{
    header ("location:../pages/Login_pg.php");
}
