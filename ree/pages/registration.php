<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href=""C:\Users\starg\OneDrive\Desktop\style.css"">
<title> Registration form</title>
<script src="Validregistration.jsx"></script>
</head>

<body style="background-color:LightYellow;">
<br>
<br>
<br>

<header>   
    <div align="center"> <h1 style="color: Teal;"> Create An Account</h1></div>
        <div align= "center"><h2 style="color: Purple;"> Create an account to begin calculating your estimate</h2>
    </div>
</header>
<form action="include/register.inc.php" method="post">
<div align="center">
<h2><label> Username<br></h2>
        <input name="username" placeholder= "username/email" type="text" maxlength="100"><br>
    </label>
<br>

<h2><label> Password <br></h2>
<input name="password" placeholder= "password" type="text" maxlength="100"><br>
</label>
<br>

<h2><label>Confirm password<br></h2>
<input name="confirmPassword" placeholder= "password" type="text" maxlength="100"><br>
</label>
<br>
<br>

<form method="POST" action ="Login_pg.php">
<button type="submit"  class="submit">Create your account</button> 
</form>
</form> 
<?php

if(isset($_GET["error"])){
   if($_GET["error"]=="emptyinput"){
       echo "<p>Field cannot be blank!</p>";
   } 
   else if($_GET["error"]=="invalidUser"){
       echo "<p>Invalid username</p>";
   }
   
   else if($_GET["error"]=="invalidPwd"){
    echo "<p>Invalid password</p>";
}

else if($_GET["error"]=="mismtchPwd"){
    echo "<p>Passwords do not match </p>";
}
else if($_GET["error"]=="stmtfailed"){
    echo "<p>Something went wrong :(, Try again </p>";
}

else if($_GET["error"]==""){
    echo "<p>Passwords do not match :(</p>";
}
    else if($_GET["error"]=="existUser"){
        echo "<p>Username already exists</p>";
    }
}
?>

</div>
</body>
</html>