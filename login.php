<?php
include("conn.php");
extract($_POST);

$msg="";
if(isset($sbt)){
  if($type=="doctor"){
    $usertype="doctor";
  }
  elseif($type=="pharmacist"){
    $usertype="pharmacy";
  }
  else{
    $usertype="patient";
  }

  $sel=mysqli_query($con,"select * from $usertype where email='$email' and password='$pass';");
  if($sel->num_rows==1){
    if($usertype=="patient"){
      header("location:login/patient-account.php?email=$email");
    }
    elseif($usertype=="pharmacy"){
      header("location:login/pharmacist-account.php?email=$email");
    }
    else{
      header("location:login/page-doctors-details.php?email=$email");
    }
  }
  else{
    $msg="Incorrect email id or password.";
  }
  

  
}
?>

<!DOCTYPE html>

<head>

  <title>login</title>
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>







  <div class="login-page">
    <h1><a href="index.html" style="text-decoration: none;color:white;">DigiHealth</a></h1>
    <div class="form">
      <!--
      <form class="register-form">
        
        <input type="text" placeholder="name"/>
        <input type="password" placeholder="password"/>
        <input type="text" placeholder="email address"/>
        <button>create</button>
        <p class="message">Already registered? <a href="#">Sign In</a></p>
      </form>-->
      <form class="login-form" action="login.php" method="post">
        <table>
          <tr>
            <td>Doctor<input type="radio" name="type" value='doctor'/></td>
            <td>Patient<input type="radio" name="type" value='patient'/></td>
            <td>Pharmacist<input type="radio" name="type" value='pharmacist'/></td>
            
          </tr>
        </table>
        <input type="text" placeholder="email" name="email" />
        <input type="password" placeholder="password" name="pass" />
        <button type="submit" name="sbt" >login</button>
        <p class="message"><?php echo $msg; ?></p>
        <p class="message">Not registered? <a href="signuppatient.php">Create an account</a></p>
      </form>
    </div>
  </div>
</body>
<link rel="stylesheet" href="css/login.css" />
</html>