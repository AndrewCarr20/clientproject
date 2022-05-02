<?php
// session_start();
// $_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">

<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylesFuelQuote.css">


</head>

<body>

    <!--cutoff -->
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















        body {

            margin: 0px auto;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {

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
    </style>


    <div class="table1">


        <table>


            <tr>
                <th style="background-color: orange;">Gallons request number</th>
                <th style="background-color: orange;">Gallons Requested</th>
                <th style="background-color: orange;">Suggested Price/Gallon</th>
                <th style="background-color: orange;">Client Delivery Address

                <th style="background-color: orange;">Client Delivery Date</th>
                <th style="background-color: orange;">FuelQuote Total</th>

            </tr>


        </table>
    </div>
</body>

</html>


<?php




?>


<?php
session_start();
$users_id1 = $_SESSION['users_users_id'];
$_SESSION['users_users_id'];
$_SESSION['username'];

//connection
$user = 'root';
$pass = '';
$db = '4353db8';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

#// echo "great work !!!";


#// include_once 'indexFuelQuery.php';

#// include_once 'index.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// The request is using the POST method
// $sql5 = "SELECT * From fuelQuote  "; // user input form users_users_id

// $result = $mysqli->query($sql5);
// echo $result;  WHERE users_users_id= '1' 


// need to select the address from the variables and print the stuff on here mega lol....





// $sql = "SELECT * FROM users WHERE users_id ='$_SESSION[users_users_id]' ";

// $result = $mysqli->query($sql4);
// echo '$result';


// // echo $sql4;
// echo "<label>  </label>";
// if ($result->num_rows > 0) {

//     while ($row = $result->fetch_assoc()) {
//         $_SESSION['users_id1'] = $row["users_id"];
//     }
// }






// echo $_SESSION['users_id'];

// $users_users_id = $_SESSION['users_users_id']; --------------------------------- taken out



// $users_id = $_SESSION['users_id'];
// $_SESSION['users_id'] = $users_id[0];
// $sql4 = "SELECT * From fuelquote  "; // user input form users_users_id
// $_SESSION[users_id]'











// '$_SESSION[users_users_id]

$sql4 = "SELECT * FROM fuelquote WHERE users_users_id ='$users_id1' ";

$result = $mysqli->query($sql4);
echo '$result';


// echo $sql4;
echo "<label>  </label>";
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {




        echo "<html>";

        echo "<table>";
        echo "<tr>";
        // $users_users_id = $row["idfuelQuote"];

        // echo "<th> [fuel quote Number: $users_users_id]</th>";

        // echo $_SESSION['users_id'];

        // $_SESSION['gallonsReq'] 
        $users_users_id = $row["gallonsReq"]; // this is where the 12 came from im an idiot lmao.....
        echo "<th> [gallons Requested: $users_users_id]</th>";
        $users_users_id = $row["delivAddress"];
        echo "<th> [delivery address: $users_users_id]</th>";
        $users_users_id = $row["delivDate"];
        echo "<th> [delivery date: $users_users_id]</th>";
        $users_users_id = $row["pricePerGal"];
        echo "<th> [Price Per-gallon: $users_users_id]</th>";
        $users_users_id = $row["total"];

        echo "<th>[ Total: $users_users_id]</th>"; // 12

        // $users_users_id = $row["user_uses_id"];
        // echo "<th> [users_users_id: $users_users_id]</th>";

        echo "<tr/>";
        echo "</table>";
    }
} else {
    echo "0 results";
}
// }

?>