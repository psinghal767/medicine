
<?php
include("conn.php");
$id=$_GET['id'];

$sel=mysqli_query($con, "select * from prescription where id='$id';");
$details=mysqli_fetch_assoc($sel);



?>

<!DOCTYPE html>

<head>

  <title>register</title>
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>







  <div class="login-page">
    <h1><a href="index.html" style="text-decoration: none;color:white;">DigiHealth</a></h1>
    <div class="form" style="text-align: left;">
      <h2>Prescription</h2>
      <h6>Disease</h6>
        <p class="message"><?= $details['disease'] ?></p>
      <h6>Symptoms</h6>
        <p class="message"><?= $details['symptoms'] ?></p>
      <h6>Prescription</h6>
        <p class="message"><?= $details['details'] ?></p>
        
    
      
    </div>
  </div>
</body>
<link rel="stylesheet" href="css/login.css" />
</html>

 