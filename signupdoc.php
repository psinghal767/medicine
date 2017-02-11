<?php
include("conn.php");
extract($_POST);
if(isset($sbt)){

  mysqli_query($con,"insert into doctor values ('$email','$pass','$name','$qual','$add','$contact');");
  header("location:index.html");
}
?>

<!DOCTYPE html>

<head>

  <title>register</title>
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>







  <div class="login-page">
    <h1><a href="index.html" style="text-decoration: none;color:white;">DigiHealth</a></h1>
    <div class="form">
      <h2>Register as Doctor!</h2>
      <form class="register-form" action="signupdoc.php" method="post">
        
        <input type="text" placeholder="name" name="name"/>
        <input type="text" placeholder="qualification" name="qual"/>
        <input type="text" placeholder="address" name="add" />
        <input type="text" placeholder="contact number" name="contact" />
        
       
        <input type="text" placeholder="email address" name="email" />
        <input type="password" placeholder="password" name="pass" />
        <button type="submit" name="sbt">create</button>
        <p class="message">Want to register as <b>PATIENT </b>&nbsp;<a href="signuppatient.php">Click Here!</a></p>
        <p class="message">Already registered? <a href="login.php">Sign In</a></p>
      </form>
      
    </div>
  </div>
</body>
<link rel="stylesheet" href="css/login.css" />
</html>