
<?php
include('login2.php'); // Includes Login Script
if(isset($_SESSION['user'])){
header("location:  commandeB.php"); // Redirecting To Profile Page
}
?>


<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from themescare.com/demos/seipkon-admin-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:05:11 GMT -->
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Seipkon is a Premium Quality Admin Site Responsive Template" />
      <meta name="keywords" content="admin template, admin, admin dashboard, cms, Seipkon Admin, premium admin templates, responsive admin, panel, software, ui, web app, application" />
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>MiniWalla -Admin Template</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <!-- Animate CSS -->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
      <!-- Font awesome CSS -->
      <link rel="stylesheet" href="assets/plugins/font-awesome/font-awesome.min.css">
      <!-- Themify Icon CSS -->
      <link rel="stylesheet" href="assets/plugins/themify-icons/themify-icons.css">
      <!-- Perfect Scrollbar CSS -->
      <link rel="stylesheet" href="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css">
      <!-- Main CSS -->
      <link rel="stylesheet" href="assets/css/seipkon.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
   <body class="body_white_bg">
       
      <!-- Start Page Loading -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- End Page Loading -->
       
      <!-- Login Page Header Area Start -->
      <div class="seipkon-login-page-header-area">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-4">
                  <div class="login-page-logo">
                     <a href="index-2.html">
                     <img src="assets/img/miniwalla.png" alt="Seipkon Logo" />
                     </a>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8">
                  <div class="login-page-logo-right">
                     
                     <a href="register.html">Sign up</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Login Page Header Area End -->
       
      <!-- Login Form Start -->
      <div class="seipkon-login-form-area">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-md-offset-4">
                  <div class="login-form-box">
                     <h3>Sign in to miniwalla</h3>
                     <form method="post" >
                        <div class="form-group">
                           <input  type="text" name="username" placeholder="Enter name" class="form-control" required >
                        </div>
                        <div class="form-group">
                           <input  type="password" name="password" placeholder="Password" class="form-control" required >
                        </div>
                        <div class="form-group form-checkbox">
                           <input type="checkbox" id="chk_2">
                           <label class="inline control-label" for="chk_2">Remember me</label>
                           <p class="lost-pass pull-right">
                              <a href="#">forget you password?</a>
                           </p>
                        </div>
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-layout-submit">
                                    <input name="submit" type="submit" value="login" class="btn btn-primary btn-block">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Login Form End -->
       
      <!-- jQuery -->
      <script src="assets/js/jquery-3.1.0.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <!-- Perfect Scrollbar JS -->
      <script src="assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js"></script>
      <!-- Custom JS -->
      <script src="assets/js/seipkon.js"></script>
   </body>

<!-- Mirrored from themescare.com/demos/seipkon-admin-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:05:11 GMT -->
</html>