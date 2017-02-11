<?php
include("../conn.php");
$id=$_GET['email'];
$sel=mysqli_query($con, "select * from doctor where email='$id';");
$detail=mysqli_fetch_assoc($sel);



?>


<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/demo/wxyz/z/medikal/v3.0/demo/page-doctors-details.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 10 Feb 2017 23:16:28 GMT -->
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
<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body style="background-color: white;">

  <?php
    include 'header.php';
  ?>

  <!-- Start main-content -->
  <div class="main-content">
      
    <!-- Section: Doctor Details -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-4">
              <div class="doctor-thumb">
                <img src="images/team/team6.jpg" alt="">
              </div>
              <ul class="styled-icons icon-gray text-center mt-15 mb-15">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
                <div class="">
                  <div class="border-5px p-20">
                    <h5><i class="fa fa-clock-o text-theme-colored"></i> Opening Hours</h5>
                    <div class="opening-hours text-left">
                      <ul class="list-unstyled">
                        <li class="clearfix line-height-1"> <span>Monday-Friday </span>
                          <div class="value"> 9.00 - 20.00 </div>
                        </li>
                        <li class="clearfix line-height-1"> <span> Saturday </span>
                          <div class="value"> 10.00 - 16.00 </div>
                        </li>
                        <li class="clearfix line-height-1"> <span> Sunday </span>
                          <div class="value"> 9.00 - 18.00 </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <b>
                  <center><button style="background-color: cyan; border:0px;"><a href="<?php echo "form-appointment-style2.php?email=".$_GET['email']; ?>">Book an Appointment</a></button></center>
                  <center><button style="background-color: cyan; border:0px;"><a href="<?php echo "form-patients.php?email=".$_GET['email']; ?>">Patients</a></button></center></b>
                </div>

            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 pl-20 pl-sm-15">
              <div>
                <h3 class="mt-0"><?php echo $detail['name']; ?></h3>
                <h5 class="text-theme-colored"><?php echo $detail['qual']; ?></h5>
                <p><?php echo $detail['address']; ?></p>
                <p><?php echo $detail['contact']; ?></p>
                <hr>
                <p class="">After graduating from West Virginia University Medical School, Dr. Jonathon Alex completed a two-year fellowship in sports medicine at Akron Children’s Hospital. During his training at Akron, Dr. Jonathon Alex was team physician for the University of Akron and Walsh University a two-year fellowship in sports medicine at Akron Children’s Hospital. During his training at Akron.</p>
              </div>
              <div class="mt-30">
                <h4 class="text-uppercase">Specialties & Qualifications</h4>
                <h5>Specialtiy: <span class="text-theme-colored">Endocrinology</span></h5>
                <p>Specialty of medicine; some would say a sub-specialty of internal medicine, which deals with the diagnosis and treatment of diseases related to hormones. </p>
                <h5>Specialtiy: <span class="text-theme-colored">Paediatric Medicine</span></h5>
                <p>Specialty of medicine; some would say a sub-specialty of internal medicine, which deals with the diagnosis and treatment of diseases related to hormones. </p>
                <h4 class="mt-30 text-uppercase">Education & Medical Training</h4>
                <ul class="list theme-colored angle-double-right m-0">
                  <li class="mt-0"><strong>Doctor of Medicine</strong><br> University of Texas, USA (1990)</li>
                  <li><strong>Medical Orientation Program</strong><br> St. Louis University (St. Louis, Missouri 1996)</li>
                </ul>
                <h4 class="mt-30 text-uppercase">Experience</h4>
                <ul class="list theme-colored angle-double-right m-0">
                  <li class="mt-0"><strong>Vice President and Chief Medical Officer,</strong> Kessler Institute for Rehabilitation</li>
                  <li><strong>Medical Corporation Professor,</strong> Institute Of Coast Private Hospital Campus</li>
                </ul>
                <h4 class="mt-30 text-uppercase">Certifications</h4>
                <ul class="list theme-colored angle-double-right m-0">
                  <li class="mt-0"><strong>American Board of Psychiatry and Neurology</strong><br> Certified in Psychiatry</li>
                  <li><strong>MA State Medical License</strong><br> Active through 2016</li>
                </ul>
                <h4 class="mt-30 text-uppercase">Publications & Presentations</h4>
                <ul class="list theme-colored angle-double-right m-0">
                  <li class="mt-0"><strong>Vice President and Chief Medical Officer,</strong> Kessler Institute for Rehabilitation</li>
                  <li><strong>Medical Corporation Professor,</strong> Institute Of Coast Private Hospital Campus</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   
  <!-- end main-content -->
  
  <script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/demo/wxyz/z/medikal/v3.0/demo/page-doctors-details.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 10 Feb 2017 23:16:28 GMT -->
</html>
