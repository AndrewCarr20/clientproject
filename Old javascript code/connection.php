<?php

$host = "localhost";
$user = "design";
$pass = "test1234";
$db = "clientdb";

$connection = mysqli_connect($host, $user, $pass, $db);
if(!$connection){
  echo "Connection error: " . mysqli_connect_error();
}

$fullname = $address_1 = $address_2 = $city = $state =$zipcode  ='';

if(isset($_POST['submit'])){

  //check full name
  if(empty($_POST['FullName'])){
    echo 'Full name is required <br />';
  }
  else{
    echo htmlspecialchars($_POST['FullName']);
  }

  //check address1
  if(empty($_POST['Address1'])){
    echo 'Address 1 is required <br />';
  }
  else{
    echo htmlspecialchars($_POST['Address1']);
  }

  //check city
  if(empty($_POST['City'])){
    echo 'City is required <br />';
  }
  else{
    echo htmlspecialchars($_POST['City']);
  }

  //check state
  if(empty($_POST['State'])){
    echo 'State is required <br />';
  }
  else{
    echo htmlspecialchars($_POST['State']);
  }

  //check zipcode
  if(empty($_POST['Zipcode'])){
    echo 'Zipcode is required <br />';
  }
  else{
    echo htmlspecialchars($_POST['Zipcode']);
  } //end of post check

$fullname = mysqli_real_escape_string($connection, $_POST['FullName']); 
$address_1 = mysqli_real_escape_string($connection, $_POST['Address1']);
$address_2 = mysqli_real_escape_string($connection, $_POST['Address2']);
$city = mysqli_real_escape_string($connection, $_POST['City']);
$state = mysqli_real_escape_string($connection, $_POST['State']);
$zipcode  = mysqli_real_escape_string($connection, $_POST['Zipcode']); 

// create sql
$sql = "INSERT INTO client_data(FullName, Address1, Address2, City, State, Zipcode) VALUES('$fullname','$address_1','$address_2 ','$city','$state','$zipcode')";

//save to db and check
if(mysqli_query($connection, $sql)){
  //success
  header('Location: index.php');
}else{
  //error
  echo 'query error: ' .mysqli_error($connection);
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
    <div class="container">
      <div class="header">
        <h2>Profile Page</h2>
      </div>

     <form class="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="form-control">
          <label for="FullName">Full Name</label>
          <input type="text" maxlength="50" id="FullName" name="full_name" value = "<?php echo htmlspecialchars($fullname) ?>" required <br> />
          <span class="error-message"></span>
        </div>

        <div class="form-control">
          <label for="Address1">Address 1</label>
          <input type="text" maxlength="50" id="Address1" name="address1" value = "<?php echo htmlspecialchars($address_1) ?>" required <br> />
          <span class="error-message"></span>
        </div>
        <div class="form-control">
          <label for="Address2">Address 2</label>
          <input type="text" maxlength="100" id="Address2" name="address2" value = "<?php echo htmlspecialchars($address_2) ?>" <br> />
          <span class="error-message"></span>
        </div>
        <div class="form-control">
          <label for="City">City</label>
          <input type="text" maxlength="100" id="City" name="city" value = "<?php echo htmlspecialchars($city) ?>" required <br> />
          <span class="error-message"></span>
        </div>
        <div class="form-control">
          <label for="">State</label>
          <select name="state" id="State">
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
          <label for="">Zipcode</label>
          <input type="text" maxlength="9" id="Zipcode" name="zipcode" value = "<?php echo htmlspecialchars($zipcode) ?>"minlength="5" required <br> />
          <span class="error-message"></span>
        </div>
        <div class="buttons">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
    <!-- <script src="./hw2.js"></script> -->
  </body>
</html>
