 <?php
    session_start();
    // $_SESSION['users_id'] = 1; // for 1   --------------
    // $_SESSION['users_id'] = $_POST['users_id'];
    // $_SESSION['users_id'] = $users_id;
    // $_SESSION['users_id'] = $users_id;
    // $_SESSION['users_users_id'] = $_SESSION['users_id']; // -------------
    if (!isset($_SESSION['username'])) {

        $_SESSION['users_users_id'] = $user_data['users_users_id'];
        header('location:http://localhost/ree/indexFuelQ.php');
    }





    echo '$_SESSION[users_users_id]';
    echo $_SESSION['users_users_id'];

    $_SESSION['users_users_id'];
    $users_id2 =  $_SESSION['users_users_id'];
    // $_SESSION['address1'] = $address1;





    // $_SESSION['username'];
    // if (!isset($_SESSION['username'])) {
    // }
    ?>



 <?php


    // //connection
    // // session_start();

    // // if ($_SESSION['users_id'] == '') { // echo session for users_id variable
    // //     echo 'true';
    // // }
    // $user = 'root';
    // $pass = '';
    // $db = '4353db7';

    // $mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

    // echo "great work !!!";



    // // $_SESSION['users_users_id'] = 1;
    // // $users_id = $_POST['users_id'];
    // // $_SESSION['users_id'] = $users_id;


    // // if (isset($_SESSION['users_id'])) {
    // //     echo 'session is active';
    // //     echo '$users_id';
    // // }
    // // include_once 'createUser.php';

    // if (isset($_POST['submitC'])) { // submits form
    //     //users
    //     // $users_id = $_POST['users_id'];

    //     $users_id = $_POST['users_id'];

    //     $_SESSION['users_id'] = $users_id;
    //     echo '$users_id';
    //     echo $users_id;
    //     echo $_SESSION['users_id'];

    //     $fullName = $_POST['fullName'];
    //     $address1 = $_POST['address1'];
    //     $_SESSION['address1'] = $address1;
    //     $address2 = $_POST['address2'];
    //     $city = $_POST['city'];
    //     $state = $_POST['state'];
    //     $zipcode = $_POST['zipcode'];


    //     //query data in database
    //     // values($gallonsReq, $pricePerGal,$delivAddress, $delivDate, $total)";

    //     $sql1 = "INSERT INTO users( users_id , fullName, address1, address2, city, state, zipcode)  values($users_id , '$fullName','$address1','$address2','$city','$state', $zipcode)";
    //     #// echo "$sql1";

    //     if ($mysqli->query($sql1) === FALSE) {
    //         // echo $mysqli->error;
    //         echo "Please choose a unique Employee_id or choose a usersname that exist.";

    //         header('location: createUser.php');
    //         exit(0);
    //     }
    // }


    ?>


 <?php

    $user = 'root';
    $pass = '';
    $db = '4353db8';

    $mysqli = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");

    echo "connected";



    if (isset($_POST['submitC'])) {

        $fullName = $_POST['fullName'];
        $address1 = $_POST['address1'];

        $address2 = $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zipcode = $_POST['zipcode'];
        // '$users_id'

        if ($fullName !== '') {
            $sql = "UPDATE users SET fullName = '$fullName' WHERE users_id = '$users_id2' ";
            $mysqli->query($sql);
            header('location:http://localhost/ree/createUser.php');
        }


        if ($address1 !== '') {

            $sql2 = "UPDATE users SET address1 = '$address1' WHERE users_id = '$users_id2' ";
            $mysqli->query($sql2);
            header('location:http://localhost/ree/createUser.php');
            exit();
        }
        if ($address2 !== '') {

            $sql3 = "UPDATE users SET address2 = '$address2' WHERE users_id = '$users_id2' ";
            $mysqli->query($sql3);
            header('location:http://localhost/ree/createUser.php');
            exit();
        }
        if ($city !== '') {

            $sql4 = "UPDATE users SET city = '$city' WHERE users_id = '$users_id2' ";
            $mysqli->query($sql4);
            header('location:http://localhost/ree/createUser.php');
            exit();
        }
        if ($state !== '') {

            $sql5 = "UPDATE users SET state = '$state' WHERE users_id = '$users_id2' ";
            $mysqli->query($sql5);
            header('location:http://localhost/ree/createUser.php');
            exit();
        }
        if ($zipcode !== '') {
            $sql6 = "UPDATE users SET zipcode = '$zipcode' WHERE users_id = '$users_id2' ";
            $mysqli->query($sql6);
            header('location:http://localhost/ree/createUser.php');
            exit();
        }
    }

    ?>





 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="styles.css" />
     <title>Document</title>
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




     <div class="container">
         <div class="header">
             <h2>Profile Page</h2>
         </div>
         <form action="createUser.php" class="form" id="form" method="POST">
             <!-- <div class="form-control">
                 <label for="users_id">id</label>
                 <input type="text" maxlength="50" id="users_id" name="users_id" required />
                 <span class="error-message"></span>
             </div> -->


             <div class="form-control">
                 <label for="fullname">Full Name</label>
                 <input type="text" maxlength="50" id="fullname" name="fullName" />
                 <span class="error-message"></span>
             </div>
             <div class="form-control">
                 <label for="Address1">Address 1</label>
                 <input type="text" maxlength="100" id="Address1" name="address1" />
                 <span class="error-message"></span>
             </div>
             <div class="form-control">
                 <label for="address2">Address 2</label>
                 <input type="text" maxlength="100" id="Address2" name="address2" />
                 <span class="error-message"></span>
             </div>
             <div class="form-control">
                 <label for="zity">City</label>
                 <input type="text" maxlength="100" id="city" name="city" />
                 <span class="error-message"></span>
             </div>
             <div class="form-control">
                 <label for="">State</label>
                 <select name="state" id="state">
                     <option value="">--Select a state--</option>
                     <option value="AL">AL</option>
                     <option value="AK">AK</option>
                     <option value="AZ">AZ</option>
                     <option value="AR">AR</option>
                     <option value="CA">CA</option>
                     <option value="CO">CO</option>
                     <option value="CT">CT</option>
                     <option value="DE">DE</option>
                     <option value="DC">DC</option>
                     <option value="FL">FL</option>
                     <option value="GA">GA</option>
                     <option value="ID">ID</option>
                     <option value="IL">IL</option>
                     <option value="IN">IN</option>
                     <option value="IA">IA</option>
                     <option value="KS">KS</option>
                     <option value="KY">KY</option>
                     <option value="LA">LA</option>
                     <option value="ME">ME</option>
                     <option value="MD">MD</option>
                     <option value="MA">MA</option>
                     <option value="MI">MI</option>
                     <option value="MN">MN</option>
                     <option value="MS">MS</option>
                     <option value="MO">MO</option>
                     <option value="MT">MT</option>
                     <option value="NE">NE</option>
                     <option value="NV">NV</option>
                     <option value="NH">NH</option>
                     <option value="NH">NH</option>
                     <option value="NJ">NJ</option>
                     <option value="NM">NM</option>
                     <option value="NY">NY</option>
                     <option value="NC">NC</option>
                     <option value="ND">ND</option>
                     <option value="OH">OH</option>
                     <option value="OK">OK</option>
                     <option value="OR">OR</option>
                     <option value="PA">PA</option>
                     <option value="RI">RI</option>
                     <option value="SC">SC</option>
                     <option value="SD">SD</option>
                     <option value="TN">TN</option>
                     <option value="TX">TX</option>
                     <option value="VT">VT</option>
                     <option value="VA">VA</option>
                     <option value="WA">WA</option>
                     <option value="WV">WV</option>
                     <option value="WI">WI</option>
                     <option value="WY">WY</option>
                 </select>
                 <span class="error-message"></span>
             </div>
             <div class="form-control">
                 <label for="zipcode">Zipcode</label>
                 <input type="text" maxlength="9" id="zipcode" name="zipcode" minlength="5" />
                 <span class="error-message"></span>
             </div>
             <div class="buttons">
                 <button type="submit" name='submitC'>Submit</button>
             </div>
         </form>


         <?php


            ?>
     </div>
     <script>

     </script>
     <style>

     </style>
 </body>

 </html>