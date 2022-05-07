<?php
// session_start();
// // $_SESSION['users_users_id'] $user_id;
// $users_id = $_SESSION['users_users_id'];
// $users_id = $_SESSION['users_id'];
?>





<?php
// session_start();

// $_SESSION['users_users_id'] = $_SESSION['users_id'];
?>



<?php


session_start();
// $_SESSION['users_users_id'];
// $_SESSION['users_users_id'] $user_id;
$users_id = $_SESSION['users_users_id'];
// $users_id = $_SESSION['users_id'];


$user = 'root';
$pass = '';
$db = '4353db8';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "connected";

// $value = getenv('REQUEST_METHOD');
// $value = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
// echo "failed";

// $_SESSION['users_users_id'] = 1;



if (isset($_SESSION['users_users_id'])) { //testing
    echo 'session is active -';
    // echo '$_SESSION[users_users_id]';
    // echo $_SESSION['users_users_id'];
    echo "user: $users_id ";
    $users_users_id = $_SESSION['users_users_id'];
} else {
    echo 'session not active';
}












if (isset($_POST["submitFer"])) { // submits form for the calculate button

    $query13 = "SELECT * FROM fuelquote WHERE users_users_id = '$users_id' ";
    $result13 = mysqli_query($mysqli, $query13);

    if ($result13 && mysqli_num_rows($result13) > 0) { // checks if table is empty
        $emptyFuelQuote = 0.01;
        // echo "$emptyFuelQuote";
    } else {
        $emptyFuelQuote = 0.00;
    }

    $query19 = "SELECT * FROM users WHERE users_id = '$users_id' "; // assoc value state of user_id
    $result19 = mysqli_query($mysqli, $query19);


    // if ($result2 && mysqli_num_rows($result2) > 0) { // checks if table is empty
    $users_data19 = mysqli_fetch_assoc($result19);

    $_SESSION['state'] = $users_data19['state'];
    $_SESSION['address1'] = $users_data19['address1'];
    $delivAddress = $_SESSION['address1'];
    // echo $delivAddress;
    $state = $_SESSION['state'];
    // echo "$state";
    // echo $_SESSION['state'];
    // echo "$_SESSION[state]";
    // $_POST[$state]

    if ($state == "TX") {  // checks if location in tx
        $totalStateMargin = 0.02;

        // echo "$totalStateMargin";
    } else {
        $totalStateMargin = 0.04;
        // echo "$totalStateMargin";
    }
    // }


    if (
        $_POST['gallonsReq'] >= 1000
    ) { // check fuel greater than 1000
        $marginFuel = 0.02;
        // echo "margin fuel ->: $marginFuel";
    } else {

        $marginFuel = 0.03;
    }



    $companyTax = 0.1;

    $pricePerGal = 1.50;
    $marginCost = ($totalStateMargin - $emptyFuelQuote   + $marginFuel + $companyTax) * $pricePerGal;
    // echo "$marginCost";
    $totalMargin = $marginCost + $pricePerGal;
    $total = $_POST['gallonsReq'] * $totalMargin;

    // echo $_POST['gallonsReq'];
    // $name = $_POST['total'];
    // $submitbutton = $_POST['submitCalc'];

    // if ($submitbutton) {  // enter total in fuel quote
    //     if (!empty($name)) {
    //         echo 'The name you entered is ' . $total;
    //         $_GET['total'] = $total;
    //     } else {
    //         echo 'You did not enter a name. Please enter a name into this form field.';
    //     }
    // }


    $gallonsReq = $_POST['gallonsReq'];
    $delivDate = $_POST['delivDate'];

    $sql3 = "INSERT INTO fuelquote( gallonsReq, delivAddress, delivDate, pricePerGal, total, users_users_id)  values('$gallonsReq','$delivAddress', '$delivDate' ,$pricePerGal ,  '$total', '$users_id')";
    // echo "$sql3";

    if (
        $mysqli->query($sql3) === FALSE
    ) {
        echo $mysqli->error;
        echo "Please choose a unique Employee_id or choose a usersname that exist.";
        header('Location: indexFuelQ.php');
        exit(0);
    }




    // $sql3 = "INSERT INTO fuelquote( idfuelQuote,gallonsReq, delivAddress, delivDate, pricePerGal, total, users_users_id)  values('19','16','mary ln', '10/23/1298','12' ,  '15', '$users_id')";
    // // echo "$sql3";

    // if (
    //     $mysqli->query($sql3) === FALSE
    // ) {
    //     echo $mysqli->error;
    //     echo "Please choose a unique Employee_id or choose a usersname that exist.";
    //     header('Location: indexFuelQ.php');
    //     exit(0);
    // }



    // $sql3 = "INSERT INTO fuelquote( idfuelQuote,gallonsReq, delivAddress, delivDate, pricePerGal, total, users_users_id)  values('18',$gallonsReq,'$delivAddress', '$delivDate',$pricePerGal ,  $total, '$users_id')";
    // // echo "$sql3";

    // if (
    //     $mysqli->query($sql3) === FALSE
    // ) {
    //     echo $mysqli->error;
    //     echo "Please choose a unique Employee_id or choose a usersname that exist.";
    //     header('Location: indexFuelQ.php');
    //     exit(0);
    // }
}






















if (isset($_POST['submitCalc'])) { // submits form for the calculate button

    $query = "SELECT * FROM fuelquote WHERE users_users_id = '$users_id' ";
    $result = mysqli_query($mysqli, $query);

    if ($result && mysqli_num_rows($result) > 0) { // checks if table is empty
        $emptyFuelQuote = 0.01;
        echo "$emptyFuelQuote";
    } else {
        $emptyFuelQuote = 0.00;
    }

    $query9 = "SELECT * FROM users WHERE users_id = '$users_id' "; // assoc value state of user_id
    $result2 = mysqli_query($mysqli, $query9);


    // if ($result2 && mysqli_num_rows($result2) > 0) { // checks if table is empty
    $users_data12 = mysqli_fetch_assoc($result2);
    $_SESSION['state'] = $users_data12['state'];
    $state = $_SESSION['state'];
    // echo "$state";
    // echo $_SESSION['state'];
    // echo "$_SESSION[state]";
    // $_POST[$state]

    if ($state == "TX") {  // checks if location in tx
        $totalStateMargin = 0.02;

        // echo "$totalStateMargin";
    } else {
        $totalStateMargin = 0.04;
        // echo "$totalStateMargin";
    }
    // }


    if ($_POST['gallonsReq1'] >= 1000) { // check fuel greater than 1000
        $marginFuel = 0.02;
        // echo "margin fuel ->: $marginFuel";
    } else {

        $marginFuel = 0.03;
    }



    $companyTax = 0.1;

    $pricePerGal = 1.50;
    $marginCost = ($totalStateMargin - $emptyFuelQuote   + $marginFuel + $companyTax) * $pricePerGal;
    // echo "$marginCost";
    $totalMargin = $marginCost + $pricePerGal;
    $total = $_POST['gallonsReq1'] * $totalMargin;

    // echo $_POST['gallonsReq1'];
    $name = $_POST['total'];
    $submitbutton = $_POST['submitCalc'];

    if ($submitbutton) {  // enter total in fuel quote
        if (!empty($name)) {
            // echo 'The name you entered is ' . $total;
            $_GET['total'] = $total;
        } else {
            // echo 'You did not enter a name. Please enter a name into this form field.';
        }
    }


    // echo "$total", $total;
}















































// // include_once "index.php";
// // echo $users_id;
// // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// if (isset($_POST['submitF'])) { // submits form

//     $gallonsReq = $_POST['gallonsReq'];

//     // $pricePerGal = $_GET['pricePerGal']; // fuel module

//     #// echo "$delivAddress";
//     $delivDate = $_POST['delivDate'];
//     $delivAddress = $_POST['delivAddress'];

//     // $total = $pricePerGal * $gallonsReq;


//     // $createUser1 = $_GET['address1']; // address



//     // fuel quote
//     // if ($_POST['submitF'] == "POST") {

//     //     $sql3 = "INSERT INTO fuelquote( gallonsReq,  delivAddress, delivDate,pricePerGal, total)  values($gallonsReq,'$delivAddress', $delivDate,   $pricePerGal ,$total)";
//     //     echo "$sql3";

//     //     if ($mysqli->query($sql3) === FALSE) {
//     //         echo $mysqli->error;
//     //         echo "Please choose a unique Employee_id or choose a usersname that exist.";
//     //         header('location: indexFuelQuery.php');
//     //         exit(0);
//     //     }
//     // }
//     // 123,'dfgdf', '10/23/1998',   454 ,23452







//     // if ($_SERVER["REQUESTED_METHOD"] === "GET") {
//     // '$_SESSION[users_id]'
//     // $_SESSION[users_users_id]
//     $query = "SELECT * FROM fuelquote WHERE users_users_id = '$users_id' ";
//     $result = mysqli_query($mysqli, $query);

//     if ($result && mysqli_num_rows($result) > 0) { // checks if table is empty
//         $emptyFuelQuote = 0.02;
//     } else {
//         $emptyFuelQuote = 0.03;
//     }


//     $state = $_POST["state"];


//     if ($_POST[$state] == "TX") {  // checks if location in tx
//         $totalStateMargin = 0.02;

//         echo "$totalStateMargin";
//     } else {
//         $totalStateMargin = 0.04;
//         echo "$totalStateMargin";
//     }



//     if ($_POST[$gallonsReq] >= 1000) { // check fuel greater than 1000
//         $marginFuel = 0.02;
//     } else {

//         $marginFuel = 0.03;
//     }



//     $companyTax = 0.1;

//     $pricePerGal = 1.30;
//     $marginCost = ($emptyFuelQuote + $totalStateMargin + $marginFuel + $companyTax);
//     echo "$marginCost";
//     $total = $marginCost * $pricePerGal;
//     echo "$total", $total;



//     // '$_SESSION[users_users_id]'
//     $sql3 = "INSERT INTO fuelquote( idfuelQuote,gallonsReq,  delivDate, pricePerGal,delivAddress, total, users_users_id)  values('17',$gallonsReq,'$delivDate',$pricePerGal ,'$delivAddress',   $total, '$users_id')";
//     // echo "$sql3";

//     if ($mysqli->query($sql3) === FALSE) {
//         echo $mysqli->error;
//         echo "Please choose a unique Employee_id or choose a usersname that exist.";
//         header('Location: indexFuelQ.php');
//         exit(0);
//     }
// }
// } //server request end
?>







<?php



// $_SESSION['users_users_id'];
// $_SESSION['users_users_id'] $user_id;
$users_id = $_SESSION['users_users_id'];
// $users_id = $_SESSION['users_id'];


// $user = 'root';
// $pass = '';
// $db = '4353db8';

// $mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

// echo "great work !!!";

// $value = getenv('REQUEST_METHOD');
// $value = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;
// echo "failed";

// $_SESSION['users_users_id'] = 1;



// if (isset($_SESSION['users_users_id'])) { //testing
//     echo 'session is active';
//     // echo '$_SESSION[users_users_id]';
//     echo $_SESSION['users_users_id'];
//     echo $users_id;
//     $users_users_id = $_SESSION['users_users_id'];
// } else {
//     echo 'session not active';
// }


// if (isset($_POST["submitF"])) { // submits form for the calculate button
//     echo "submitF";
//     $query13 = "SELECT * FROM fuelquote WHERE users_users_id = '$users_id' ";
//     $result13 = mysqli_query($mysqli, $query13);

//     if ($result13 && mysqli_num_rows($result13) > 0) { // checks if table is empty
//         $emptyFuelQuote = 0.01;
//         echo "$emptyFuelQuote";
//     } else {
//         $emptyFuelQuote = 0.00;
//     }

//     $query19 = "SELECT * FROM users WHERE users_id = '$users_id' "; // assoc value state of user_id
//     $result19 = mysqli_query($mysqli, $query19);


//     // if ($result2 && mysqli_num_rows($result2) > 0) { // checks if table is empty
//     $users_data19 = mysqli_fetch_assoc($result19);

//     $_SESSION['state'] = $users_data19['state'];
//     $_SESSION['address1'] = $users_data19['address1'];
//     $delivAddress = $_SESSION['address1'];
//     echo $delivAddress;
//     $state = $_SESSION['state'];
//     echo "$state";
//     echo $_SESSION['state'];
//     echo "$_SESSION[state]";
//     // $_POST[$state]

//     if ($state == "TX") {  // checks if location in tx
//         $totalStateMargin = 0.02;

//         echo "$totalStateMargin";
//     } else {
//         $totalStateMargin = 0.04;
//         echo "$totalStateMargin";
//     }
//     // }


//     if ($_POST['gallonsReq'] >= 1000) { // check fuel greater than 1000
//         $marginFuel = 0.02;
//         echo "margin fuel ->: $marginFuel";
//     } else {

//         $marginFuel = 0.03;
//     }



//     $companyTax = 0.1;

//     $pricePerGal = 1.50;
//     $marginCost = ($totalStateMargin - $emptyFuelQuote   + $marginFuel + $companyTax) * $pricePerGal;
//     echo "$marginCost";
//     $totalMargin = $marginCost + $pricePerGal;
//     $total = $_POST['gallonsReq'] * $totalMargin;

//     echo $_POST['gallonsReq'];
//     // $name = $_POST['total'];
//     // $submitbutton = $_POST['submitCalc'];

//     // if ($submitbutton) {  // enter total in fuel quote
//     //     if (!empty($name)) {
//     //         echo 'The name you entered is ' . $total;
//     //         $_GET['total'] = $total;
//     //     } else {
//     //         echo 'You did not enter a name. Please enter a name into this form field.';
//     //     }
//     // }




//     $sql3 = "INSERT INTO fuelquote( idfuelQuote,gallonsReq, delivAddress, delivDate, pricePerGal, total, users_users_id)  values('18',$gallonsReq,'$delivAddress', '$delivDate',$pricePerGal ,  $total, '$users_id')";
//     // echo "$sql3";

//     if ($mysqli->query($sql3) === FALSE) {
//         echo $mysqli->error;
//         echo "Please choose a unique Employee_id or choose a usersname that exist.";
//         header('Location: indexFuelQ.php');
//         exit(0);
//     }
// }




?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fuel Quote</title>
    <link rel="stylesheet" href="stylesFuelQuote.css">
</head>

<body>


    <div class="topnav">
        <a class="active" href="indexFuelQ.php">FuelQuote</a>
        <a href="createUser.php">Update User Profile</a>
        <a href="indexFuelHist.php">History</a>
        <a href="index.php">Logout</a>
    </div>

    <div style="padding-right:100px">

    </div>

    <style>
        body table td th {
            margin: 100px auto;

        }

        table,
        td,
        th {
            border: 1px solid;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>









    <div class="wrapper">
        <div class="title">
            Fuel Quote
        </div>
        <div class="form">
            <form action="indexFuelQ.php" name="submitFer" method="POST">
                <!-- <div class="inputfield">
                    <label>gallon Id</label>
                    <input type="number" id="quantity" name="user_id" class="input" placeholder="id gal" required> echo

                </div> -->


                <div class="inputfield">
                    <label>Gallons Requested</label>
                    <input type="number" id="quantity" name="gallonsReq" min="1" max="100,000" class="input" placeholder="Gallons Requested" required>

                </div>
                <div class="inputfield">
                    <label>Suggested Price/gallon</label>
                    <input type="text" name="pricePerGal" class="input" placeholder="1.50$" readonly>

                </div>
                <div class=" inputfield">
                    <label>Client Delivery Address</label>
                    <input type="text" class="input" name='delivAddress' readonly>

                </div>
                <div class="inputfield">
                    <label>Client Delivery Date</label>
                    <input type="date" class="input" name='delivDate' min="2/18/2022" max="2/22/2022" required>
                </div>

                <div class="inputfield">
                    <input type="submit" value="Submit Request" name="submitFer" class="btn">
                </div>


                <!-- <div class="inputfield">
                    <input type="submit" name="submitCalc" value="Calculate Total" class="btn" required>
                </div>

                <div class="inputfield">
                    <label> Total</label>
                    <input type="text" class="input" name='total'>
                </div> -->


            </form>

            <form action="indexFuelQ.php" method="POST">

                <div class="inputfield">
                    <input type="submit" name="submitCalc" value="Calculate Total" class="btn" required>
                </div>

                <div class="inputfield">
                    <label>Gallons Requested</label>
                    <input type="number" id="quantity" name="gallonsReq1" min="1" max="100,000" class="input" placeholder="Gallons Requested" required>

                </div>
                <div class="inputfield">
                    <label> Total</label>
                    <input type="text" class="input" value=<?php if (!isset($_POST['submitCalc'])) {
                                                                echo 'CALCULATE-TOTAL';
                                                            } else {
                                                                echo $total;
                                                            } ?> name='total'>
                </div>
            </form>

        </div>
    </div>


    <style>
        body {
            margin: 0px auto;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            margin-top: auto;
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .topnav-right {
            float: right;
        }















        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
















        body {
            background: #ffffff;
            /* #fec107*/
            padding: 0 10px;
        }

        .wrapper {
            max-width: 500px;
            width: 100%;
            background: #fff;
            margin: 100px auto;
            /*change from 20 px changes box space from nav bar */
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.125);
            padding: 30px;
        }

        .wrapper .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #04AA6D;
            /*#fec107;*/
            text-transform: uppercase;
            text-align: center;

        }

        .wrapper .form {
            width: 100%;
        }

        .wrapper .form .inputfield {
            /*  */
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }



        .wrapper .form .inputfield label {
            /*  */
            width: 200px;
            color: #757575;
            margin-right: 10px;
            font-size: 14px;
        }



        .wrapper .form .inputfield .input,
        .wrapper .form .inputfield .textarea {
            /*  */
            width: 100%;
            outline: none;
            border: 1px solid #d5dbd9;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 30px;
            /* 3 px orignally*/
            transition: all 0.3s ease;
        }


        .wrapper .form .inputfield .custom_select:before {
            /*  */
            content: "";
            position: absolute;
            top: 12px;
            right: 10px;
            border: 8px solid;
            border-color: #d5dbd9 transparent transparent transparent;
            pointer-events: none;
        }

        .wrapper .form .inputfield .custom_select select {
            /*  */
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            width: 100%;
            height: 100%;
            border: 0px;
            padding: 8px 10px;
            font-size: 15px;
            border: 1px solid #d5dbd9;
            border-radius: 3px;
        }


        .wrapper .form .inputfield .input:focus,
        .wrapper .form .inputfield .textarea:focus,
        .wrapper .form .inputfield .custom_select select:focus {
            border: 1px solid #fec107;
        }

        .wrapper .form .inputfield p {
            /*  */
            font-size: 14px;
            color: #757575;
        }


        .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark {
            /*  */
            background: #fec107;
        }

        .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark:before {
            /*  */
            display: block;
        }

        .wrapper .form .inputfield .btn {
            /*  */
            width: 100%;
            padding: 8px 10px;
            font-size: 15px;
            border: 0px;
            background: #fec107;
            color: #fff;
            cursor: pointer;
            border-radius: 3px;
            outline: none;
        }

        .wrapper .form .inputfield .btn:hover {
            /*  */
            background: #ffd658;
        }

        .wrapper .form .inputfield:last-child {
            /*  */
            margin-bottom: 0;
        }

        @media (max-width:420px) {

            /*  */
            .wrapper .form .inputfield {
                flex-direction: column;
                align-items: flex-start;
            }

            .wrapper .form .inputfield label {
                /*  */
                margin-bottom: 5px;
            }

            .wrapper .form .inputfield.terms {
                /*  */
                flex-direction: row;
            }


            /** history table **/





        }
    </style>




</body>

</html>