<?php

include_once "../../config.php";


session_start();
unset($_SESSION['loginE']);

if (isset($_POST['submit'])) { 
	if (empty($_POST['email']) || empty($_POST['pass'])) {  
	$_SESSION['loginE']="Email or Password is Empty";
	}else{
		
		$mail = $_POST['email']; 
		$password = $_POST['pass'];
		$connect = mysqli_connect("localhost", "root", "fakamadafaka123", "projetweb2a");  
	 $query = "SELECT * From admins where email='$mail' and password='$password' LIMIT 1 ";
	 $result = mysqli_query($connect, $query); 
	 if(mysqli_num_rows($result)==1)
	 {
		 while($row = mysqli_fetch_array($result))
		 {
			 $_SESSION['user_id'] = $row['id'];
			 $_SESSION['name'] = $row['first_name']." ".$row['last_name'];
				header("location: index.php"); // Redirecting To Profile Page 
		 }
	 }else
	 {
		 $_SESSION['loginE']="Email or Password is Invalid";
	 }		
	}
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
      <title>Miniwalla Admin</title>
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
                     <a href="index.php">
                     <img src="assets/img/logo.png" alt="Seipkon Logo" />
                     </a>
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
                     <h3>Sign in to Miniwalla</h3>
                     <form action="login.php" method="POST" >
                        <div class="form-group">
                           <input name="email" type="text" placeholder="Email or Username" class="form-control" required >
                        </div>
                        <div class="form-group">
                           <input name="pass" type="password" placeholder="Password" class="form-control" required >
						    <div class="form-layout-submit">
                                    <?php if(isset($_SESSION['loginE'])){ echo $_SESSION['loginE']; } ?>
									
                                 </div>
						   
                        </div>
                        
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="form-layout-submit">
                                    <button name="submit" type="submit" >Sign in</button>
									
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