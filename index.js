<script>
var attempts = 5;
var username= document.getElementById("username").value;
var password= document.getElementById("password").value;


  if(username=="Brianna1" && password=="Mackey01")
   alert("Login Successful")
  
  window.location= "FuelQuotePage" ;
  return false;


else
  attempts --
  alert("You have " + attempts+ "more attempts until your account is locked");

if(attempts==0)
document.getElementById("username").disabled= true;
document.getElementById("password").disabled= true;
document.getElementsByClassName("submit").disabled= true;

return false;
    

</script>