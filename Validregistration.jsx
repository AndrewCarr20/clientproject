<script>

  var username= document.getElementByName("username").value;
  var password= document.getElementsByName("password").value;
  var match=document.getElementByName("confirmPassword").value;

  input.onkeyup = function() 
  password_re=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]\d{10})./

  if(!input.password.value(password_re)) 
    alert("Error: password must contain: at least one uppercase letter (A-Z)");
    log.newline("Or one special character (!*@#-_)");
    log.newline("Or atleast one number");
  &rbrace;

  if(password!=match)
      alert("Mismatch Passwords");
  &rbrace;

else
  attempts --;
  alert("You have " + attempts+ "more attempts until your account is locked");

    &rbrace;
&rbrace

  </script>
