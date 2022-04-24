
<?php



//connection
$user = 'root';
$pass = '';
$db = '4353db1';

$mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

echo "great work !!!";


// include_once 'indexFuelQuery.php';

// include_once 'index.php';



$sql4 = "SELECT * From fuelQuote WHERE users_users_id= '1'  "; // user input form users_users_id

$result = $mysqli->query($sql4);
echo $sql4;
echo "<label> Fuel Quote History </label>";
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        echo "<html>";

        echo "<table>";
        echo "<tr>";
        $users_users_id = $row["idfuelQuote"];

        echo "<th> [fuel quote Number: $users_users_id]</th>";
        $users_users_id = $row["gallonsReq"];
        echo "<th> [gallons Requested: $users_users_id]</th>";
        $users_users_id = $row["delivAddress"];
        echo "<th>[delivery address: $users_users_id]</th>";
        $users_users_id = $row["delivDate"];
        echo "<th> [delivery date $users_users_id]</th>";
        $users_users_id = $row["pricePerGal"];
        echo "<th> [Price  Per gallon: $users_users_id]</th>";
        $users_users_id = $row["total"];

        echo "<th>[ Total: $users_users_id]</th>"; // 12
        echo "<tr/>";
        echo "</table>";
    }
} else {
    echo "0 results";
}



?>