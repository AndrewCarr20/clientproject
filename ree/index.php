<?php

$user = 'root';
$pass = '';
$db = '4353db1';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "great work !!!";

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


    <!--cutoff -->
    <div class="topnav">
        <a class="active" href="/ree/index.php">FuelQuote</a>
        <a href="/hw2.html">Update User Profile</a>
        <a href="/ree/indexFuelHist.php">History</a>
        <a href="#about">Logout</a>
    </div>

    <div style="padding-right:100px">

    </div>









    <div class="wrapper">
        <div class="title">
            Fuel Quote
        </div>
        <div class="form">
            <form action="indexFuelQuery.php" method="POST">
                <div class="inputfield">
                    <label>Gallons Requested</label>
                    <input type="number" id="quantity" name="gallonsReq" min="1" max="100,000" class="input" placeholder="Gallons Requested" required>

                </div>
                <div class="inputfield">
                    <label>Suggested Price/gallon</label>
                    <input type="text" name="pricePerGal" class="input" readonly>

                </div>
                <div class=" inputfield">
                    <label>Client Delivery Address</label>
                    <input type="text" class="input" name='delivAddress' readonly>

                </div>
                <div class="inputfield">
                    <label>Client Delivery Date</label>
                    <input type="date" class="input" name='delivDate' min="2/18/2022" max="2/22/2022">
                </div>


                <div class="inputfield">
                    <input type="submit" value="Calculate Total" class="btn" required>
                </div>

                <div class="inputfield">
                    <label> Total</label>
                    <input type="text" class="input" name='total' readonly>
                </div>

                <div class="inputfield">
                    <input type="submit" value="Submit Request" name='submitF' class="btn">
                </div>


        </div>
    </div>


</body>

</html>