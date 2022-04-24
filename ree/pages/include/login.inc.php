<?php
$mysqli= new mysqli('localhost', $usernameAccess, $passwordAccess, $dbAccess) or die("unable to connect");

echo "great work !!!";

if (isset($_POST["SUBMIT"])){
    echo "it works";
}

else{
    header ("location:../pages/Login_pg.php");
}


?>