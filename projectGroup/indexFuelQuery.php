<?php
// session_start();

// $_SESSION['users_users_id'] = $_SESSION['users_id']
?>



<?php

session_start();

$_SESSION['users_users_id'] = $_SESSION['users_id'];



$user = 'root';
$pass = '';
$db = '4353db3';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "great work !!!";

// $value = getenv('REQUEST_METHOD');
// $value = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
// echo "failed";

// $_SESSION['users_users_id'] = 1;



if (isset($_SESSION['users_users_id'])) { //testing
    echo 'session is active';
    echo '$_SESSION[users_users_id]';
    echo $_SESSION['users_users_id'];
} else {
    echo 'session not active';
}
// include_once "index.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submitF'])) { // submits form

        $gallonsReq = $_POST['gallonsReq'];

        // $pricePerGal = $_GET['pricePerGal']; // fuel module

        #// echo "$delivAddress";
        $delivDate = $_POST['delivDate'];
        $delivAddress = $_POST['delivAddress'];

        // $total = $pricePerGal * $gallonsReq;


        // $createUser1 = $_GET['address1']; // address



        // fuel quote
        // if ($_POST['submitF'] == "POST") {

        //     $sql3 = "INSERT INTO fuelquote( gallonsReq,  delivAddress, delivDate,pricePerGal, total)  values($gallonsReq,'$delivAddress', $delivDate,   $pricePerGal ,$total)";
        //     echo "$sql3";

        //     if ($mysqli->query($sql3) === FALSE) {
        //         echo $mysqli->error;
        //         echo "Please choose a unique Employee_id or choose a usersname that exist.";
        //         header('location: indexFuelQuery.php');
        //         exit(0);
        //     }
        // }
        // 123,'dfgdf', '10/23/1998',   454 ,23452







        // if ($_SERVER["REQUESTED_METHOD"] === "GET") {

        $query = "SELECT * FROM fuelquote WHERE users_users_id ='$_SESSION[users_id]' ";
        $result = mysqli_query($mysqli, $query);

        if ($result && mysqli_num_rows($result) > 0) { // checks if table is empty
            $emptyFuelQuote = 0.02;
        } else {
            $emptyFuelQuote = 0.03;
        }


        $state = $_POST["state"];


        if ($_POST[$state] == "TX") {  // checks if location in tx
            $totalStateMargin = 0.02;

            echo "$totalStateMargin";
        } else {
            $totalStateMargin = 0.04;
            echo "$totalStateMargin";
        }



        if ($_POST[$gallonsReq] >= 1000) { // check fuel greater than 1000
            $marginFuel = 0.02;
        } else {

            $marginFuel = 0.03;
        }



        $companyTax = 0.1;

        $pricePerGal = 1.30;
        $marginCost = ($emptyFuelQuote + $totalStateMargin + $marginFuel + $companyTax);
        echo "$marginCost";
        $total = $marginCost * $pricePerGal;
        echo "$total", $total;
        echo



        $sql3 = "INSERT INTO fuelquote( idfuelQuote,gallonsReq,  delivAddress, delivDate,pricePerGal, total, users_users_id)  values('',$gallonsReq,'$delivAddress', '$delivDate',   $pricePerGal ,$total, '$_SESSION[users_users_id]')";
        // echo "$sql3";

        if ($mysqli->query($sql3) === FALSE) {
            echo $mysqli->error;
            echo "Please choose a unique Employee_id or choose a usersname that exist.";
            header('Location: index.php');
            exit(0);
        }
    }
} //server request end
?>

<?php


?>

// } server request

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