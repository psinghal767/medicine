<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/demo/wxyz/z/medikal/v3.0/demo/page-account.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 10 Feb 2017 23:15:54 GMT -->
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Medikal - Health & Medical HTML Template" />
<meta name="keywords" content=" clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy" />
<meta name="author" content="ThemeMascot" />


<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>

<link href="css/style-main.css" rel="stylesheet" type="text/css">

<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">

<link href="css/colors/theme-skin-blue.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

</head>

<body style="background-color: white;">

<?php
  include 'header.php';
?>


<div id="wrapper" class="clearfix">
  <!-- preloader -->
   <!-- Start main-content -->
  <div class="main-content">

    
      
    <!-- Section: Doctor Details -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-sx-12 col-sm-4 col-md-4">
              <div class="doctor-thumb">
                <img src="images/about/profile1.html" alt="">
              </div>
              <div class="info p-20 bg-black-333">
                <h4 class="text-uppercase text-white">Jacob Smith</h4>
                <p class="text-gray-silver">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus.</p>
                <ul class="list angle-double-right m-0">
                  <li class="mt-0 text-gray-silver"><strong class="text-gray-lighter">Email</strong><br> smith@yourdomain.com</li>
                  <li class="text-gray-silver"><strong class="text-gray-lighter">Web</strong><br> www.yourdomain.com</li>
                </ul>
                <ul class="styled-icons icon-gray icon-circled icon-sm mt-15 mb-15">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <a class="btn btn-info btn-flat mt-10 mb-sm-30" href="#">Edit Profile</a>
                <a class="btn btn-danger btn-flat mt-10 mb-sm-30" href="#">Logout</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8">
              <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Orders <span class="badge">4</span></a></li>
                  <li role="presentation"><a href="#free-orders" aria-controls="free-orders" role="tab" data-toggle="tab" class="font-15 text-uppercase">Free Orders <span class="badge">3</span></a></li>
                  <li role="presentation"><a href="#bookmarks" aria-controls="bookmarks" role="tab" data-toggle="tab" class="font-15 text-uppercase">Bookmarks <span class="badge">5</span></a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="orders">
                    <div class="table-responsive">
                      <table class="table table-hover">
                         <thead>
                            <tr>
                               <th>Order ID</th>
                               <th>Date</th>
                               <th>Payment</th>
                               <th>Total</th>
                               <th></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <th scope="row">#1264</th>
                               <td>24/07/2016</td>
                               <td>PayPal</td>
                               <td>$127.50</td>
                               <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                            </tr>
                            <tr>
                               <th scope="row">#1264</th>
                               <td>24/07/2016</td>
                               <td>PayPal</td>
                               <td>$127.50</td>
                               <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                            </tr>
                            <tr>
                               <th scope="row">#1264</th>
                               <td>24/07/2016</td>
                               <td>PayPal</td>
                               <td>$127.50</td>
                               <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                            </tr>
                            <tr>
                               <th scope="row">#1264</th>
                               <td>24/07/2016</td>
                               <td>PayPal</td>
                               <td>$127.50</td>
                               <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                            </tr>
                         </tbody>
                      </table>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="free-orders">
                    <table class="table table-hover">
                       <thead>
                          <tr>
                             <th>Order ID</th>
                             <th>Date</th>
                             <th>Payment</th>
                             <th>Total</th>
                             <th></th>
                          </tr>
                       </thead>
                       <tbody>
                          <tr>
                             <th scope="row">#1189</th>
                             <td>24/07/2016</td>
                             <td>PayPal</td>
                             <td>$127.50</td>
                             <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                          </tr>
                          <tr>
                             <th scope="row">#1189</th>
                             <td>24/07/2016</td>
                             <td>PayPal</td>
                             <td>$127.50</td>
                             <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                          </tr>
                          <tr>
                             <th scope="row">#1189</th>
                             <td>24/07/2016</td>
                             <td>PayPal</td>
                             <td>$127.50</td>
                             <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                          </tr>
                          <tr>
                             <th scope="row">#1189</th>
                             <td>24/07/2016</td>
                             <td>PayPal</td>
                             <td>$127.50</td>
                             <td><a class="btn btn-success btn-xs" href="#">View Order</a></td>
                          </tr>
                       </tbody>
                    </table>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="bookmarks">
                    <table class="table">
                       <tbody>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Web Development Course</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Software Development Course</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>App Development Course</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                          <tr>
                             <th scope="row"><img src="http://placehold.it/100x50" alt=""></th>
                             <td><h4>Photoshop Course</h3></h4>
                             <td><h4>$127.50</h3></h4>
                             <td><h4><a href="#"><i class="fa fa-close"></i></a></h3></h4>
                          </tr>
                       </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->
  
 

<!-- Footer Scripts --> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>

</body>

<!-- Mirrored from kodesolution.com/demo/wxyz/z/medikal/v3.0/demo/page-account.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 10 Feb 2017 23:15:56 GMT -->
</html>
