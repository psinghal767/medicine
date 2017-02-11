<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/demo/wxyz/z/medikal/v3.0/demo/form-appointment-style2.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 10 Feb 2017 23:15:33 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Medikal - Health & Medical HTML Template" />
<meta name="keywords" content=" clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy" />
<meta name="author" content="ThemeMascot" />

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

</head>
<body>

<?php
  include '../conn.php';
  include 'header.php';
?>

<div id="wrapper" class="clearfix">
  <!-- preloader -->
  
  <!-- Start main-content -->
  <div class="main-content"> 
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-dark-9" style="background-image: url(images/bg/bg4.jpg);">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pb-100">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="bg-lightest border-1px p-25">
                  <h4 class="text-theme-colored text-uppercase m-0">Make an Appointment</h4>
                  <div class="line-bottom mb-30"></div>
                 <!-- <p>Lorem ipsum dolor sit amet, consectetur elit.</p> -->
                  <form id="appointment_form" name="appointment_form" class="mt-30" method="POST">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true" name="name" style="background-color: white;">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input class="form-control required email" type="email" placeholder="Enter Email" aria-required="true" name="email" style="background-color: white;">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input class="form-control required" type="text" placeholder="Enter Phone" aria-required="true" name="phone" style="background-color: white;">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input class="form-control required date-picker" type="date" placeholder="Appoinment Date" name="date" aria-required="true" style="background-color: white;">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input class="form-control required time-picker" type="time" placeholder="Appoinment Time" name="time" aria-required="true" style="background-color: white;">
                        </div>
                      </div>
                    </div>
                    <div class="form-group mb-10">
                      <textarea class="form-control required"  placeholder="Enter Message" name="msg" rows="5" aria-required="true"></textarea>
                    </div>
                    <div class="form-group mb-0 mt-20">
                      
                      <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait..." name="makeAppointment">Submit</button>
                    </div>
                  </form>
                  <!-- Appointment Form Validation-->
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

 <!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/demo/wxyz/z/medikal/v3.0/demo/form-appointment-style2.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 10 Feb 2017 23:15:33 GMT -->
</html>

<?php
  if(isset($_POST['makeAppointment'])){
      $docEmail = $_GET['email'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $date = $_POST['date'];
      $time = $_POST['time'];
      $msg = $_POST['msg'];
      $insert = mysqli_query($con, "Insert into appointment (name, email, docEmail, phone, appDate, appTime, msg) VALUES('$name', '$email', '$docEmail', '$phone', '$date', '$time', '$msg') ");
      
      echo "<script>window.open('page-doctors-details.php?email=$docEmail', '_self');</script>";
      
  }
?>
