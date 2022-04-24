<?php
include "index.php";
//connection
$user = 'root';
$pass = '';
$db = '4353db1';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "great work !!!";


//users
$users_id = $_POST['users_id'];
$fullName = $_POST['fullName'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];



//authetification values 
$usernameid = $_POST['usernameid'];
$username = $_POST['username'];
$userPassword = $_POST['userPassword'];
$confPwd = $_POST['confPwd'];
$usernameid = $_POST[''];


// fuel quote values




$gallonsReq = $_POST['gallonsReq'];

$pricePerGal = $_POST['pricePerGal']; // fuel module
// $delivAddress = $_POST['delivAddress']; // SET EQUAL TO THE other users form...
// $delivAddress = "SELECT address1 FROM users where users_id = '1' "; // SET EQUAL TO THE other users form...


$sql4 = "SELECT * From users WHERE users_id= '1'  "; // user input form users_users_id

$result = $mysqli->query($sql4);
echo $sql4;

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $users_id = $row["address1"];
        $delivAddress = $row["address1"];

        // echo $users_id; // geroge ln
    }
} else {
    echo "0 results";
}



echo "$delivAddress";

$delivAddress1 = $_POST[$delivAddress];

// $delivAddress1 = $sql2 = "SELECT fullName FROM users where users_id = ";



// echo "$delivAddress";
$delivDate = $_POST['delivDate'];

$total = $pricePerGal * $gallonsReq;


//query data in database
// values($gallonsReq, $pricePerGal,$delivAddress, $delivDate, $total)";

$sql1 = "INSERT INTO users(users_id, fullName, address1, address2, city, state, zipcode)  values('?', 'andrea','wilberg ln','willberg ln2','HOUSTON','TX', 234232)";
echo "$sql1";

if ($mysqli->query($sql1) === FALSE) {
    echo $mysqli->error;
    echo "Please choose a unique Employee_id or choose a usersname that exist.";
    // header('Refresh: 5; url=https://team13web.azurewebsites.net/data_entry_employee.php');
    exit(0);
}

//database access

$sql2 = "INSERT INTO username(usernameid, username, userPassword, confPwd, users_users_id)  values(2, 'user1', 'pass1', 'pass1', 45)";
echo "$sql2";

if ($mysqli->query($sql2) === FALSE) {
    echo $mysqli->error;
    echo "Please choose a unique Employee_id or choose a usersname that exist.";
    // header('Refresh: 5; url=https://team13web.azurewebsites.net/data_entry_employee.php');
    exit(0);
}




// fuel quote

if(isset($_POST['submitF'])){
$sql3 = "INSERT INTO fuelQuote(idfuelQuote, gallonsReq, pricePerGal, delivAddress, delivDate, total)  values(2, 7, 4.76,'george ln', '2022-01-28', 45)";
echo "$sql3";

if ($mysqli->query($sql3) === FALSE) {
    echo $mysqli->error;
    echo "Please choose a unique Employee_id or choose a usersname that exist.";
    // header('Refresh: 5; url=https://team13web.azurewebsites.net/data_entry_employee.php');
    exit(0);
}



}

?>


// //fuel module...
// function pricingModule($gallonsReq, $pricePerGal, $state, $total){

// //factors
// //0.02 texas else 0.04
// // if query table empty 0 else 0.01
// // fuel > 1000 = 0.02 else 0.03
// // company profit 0.1

// //margins 4 of them
// if ($state == 'TX'){
// return $totalStateMargin += 0.02;

// } else{
// return $totalStateMargin += 0.01; ";




// }

// if($queryTable = "SELECT 1 FROM fuelQuote LIMIT 1" ){ old code


$sql6 = "SELECT * From fuelQuote WHERE users_users_id= '1' ";
$result = $mysqli->query($sql6);
if($result->num_rows>0){

// return $marginEmptyTable = 0.01;
echo "$marginEmptyTable";
// }else{
// return $marginEmptyTable = 0.0;
// }


// if($gallonsReq > 1000){
return $marginGallonReq = 0.02;

}else {
return $marginGallonReq = 0.03;
}

$companyProfit = 0.1; //10% always