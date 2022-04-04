<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="login.css">
<title>Gas Mileage calculator</title>
<script src="index.js"></script>
</head>

<br>
<br>
<br>
<br>
<body>
<section>
<br>
<br>
<div align="center">
  <h1> Login</h1>  
  </div>

<div align="center">
  <form>
    <input style = "width: 300px; height: 30px" type="text" id="username" placeholder="USERNAME" >
      <br>
        <br>
          <input style = "width: 300px; height: 30px" type="text" id="password" placeholder = "PASSWORD"><br>
         <br>
         <form action="include/login.inc.php" method="POST"></form>
        <form method= "POST" action ="Meminfo.htm">
      <input type="submit" value="LOGIN" class="submit"/>
    </form>

  <h5>If you are not a member<a href="registration.php" > Sign up</a></h5>
</div>
<br>
<br>
</section>

</body>
</html>

<script src="js/script.js"></script>