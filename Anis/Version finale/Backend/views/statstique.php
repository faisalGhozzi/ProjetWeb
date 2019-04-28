<?php  
session_start();
 $connect = mysqli_connect("localhost", "root", "", "projet");  
 $query = "SELECT gouvernorat, count(*) as number FROM livraison GROUP BY gouvernorat";  
 $result = mysqli_query($connect, $query);  
 ?>  
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from themescare.com/demos/seipkon-admin-template/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:02:49 GMT -->
<head>

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="Seipkon is a Premium Quality Admin Site Responsive Template" />
      <meta name="keywords" content="admin template, admin, admin dashboard, cms, Seipkon Admin, premium admin templates, responsive admin, panel, software, ui, web app, application" />
      <meta name="author" content="Themescare">
      <!-- Title -->
      <title>Seipkon - Bootstrap Admin Template</title>
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
      <!-- Bootstrap-select CSS -->
      <link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css">
      <!-- Main CSS -->
      <link rel="stylesheet" href="assets/css/seipkon.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <!-- My StyleSheet -->
      <link rel="stylesheet" href="assets/css/mystyle.css">
	  <script src="assets/js/jquery-3.1.0.min.js"></script>
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	  <script language="javascript">
	 google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['gouvernorat', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gouvernorat"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Nombre de livraison par gouvernorat ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
	  </script>

   </head>
   <body>
       
      <!-- Start Page Loading -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!-- End Page Loading -->
       
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Main Header Start -->
         <header class="main-header">
             
            <!-- Logo Start -->
            <div class="seipkon-logo">
               <a href="index.php">
               <img src="assets/img/logo2.png" style="filter:invert(100%);" alt="logo">
               </a>
            </div>
            <!-- Logo End -->
             
            <!-- Header Top Start -->
            <nav class="navbar navbar-default">
               <div class="container-fluid">
                  <div class="header-top-section">
                     <div class="pull-left">
                         
                        <!-- Collapse Menu Btn Start -->
                        <button type="button" id="sidebarCollapse" class=" navbar-btn">
                        <i class="fa fa-bars"></i>
                        </button>
                        <!-- Collapse Menu Btn End -->
                         
                        <!-- Header Top Search Start -->
                        <div class="header-top-search">
                           <form>
                              <input type="search" placehFolder="Search..." >
                              <button type="submit" ><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                        <!-- Header Top Search End -->
                         
                     </div>
                     <div class="header-top-right-section pull-right">
                        <ul class="nav nav-pills nav-top navbar-right">
                            
                           <!-- Full Screen Btn Start -->
                           <li>
                              <a href="#"  id="fullscreen-button">
                              <i class="fa fa-arrows-alt"></i>
                              </a>
                           </li>
                           <!-- Full Screen Btn End -->
                            
                           <!-- Message Toggle Start -->

                           <!-- Message Toggle Start -->
                            
                           <!-- Notification Toggle Start -->

                           <!-- Notification Toggle End -->
                            
                           <!-- Profile Toggle Start -->
                           <li class="dropdown">
                              <a class="dropdown-toggle profile-toggle" href="#" data-toggle="dropdown">
                                 <img src="assets/img/avatar.jpg" class="profile-avator" alt="admin profile" />
                                 <div class="profile-avatar-txt">
                                    <p><?PHP echo $_SESSION['name']; ?></p>
                                    <i class="fa fa-angle-down"></i>
                                 </div>
                              </a>
                              <div class="profile-box dropdown-menu animated bounceIn">
                                 <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> view profile</a></li>
                                    <li><a href="#"><i class="fa fa-pencil-square-o"></i> Edit profile</a></li>
                                    <li><a href="#"><i class="fa fa-flash"></i> Activity Log</a></li>
                                    <li><a href="#"><i class="fa fa-wrench"></i> Setting</a></li>
                                    <li><a href="signout.php"><i class="fa fa-power-off"></i> sign out</a></li>
                                 </ul>
                              </div>
                           </li>
                           <!-- Profile Toggle End -->
                            
                        </ul>
                     </div>
                  </div>
               </div>
            </nav>
            <!-- Header Top End -->
             
         </header>
         <!-- Main Header End -->
          
         <!-- Sidebar Start -->
         <aside class="seipkon-main-sidebar">
            <nav id="sidebar">
                
               <!-- Sidebar Profile Start -->
               <div class="sidebar-profile clearfix">
                  <div class="profile-avatar">
                     <img src="assets/img/avatar.jpg" alt="profile" />
                  </div>
                  <div class="profile-info">
                     <h3>Haj Ali Anis</h3>
                     <p>Welcome Admin !</p>
                  </div>
               </div>
               <!-- Sidebar Profile End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">
                  <h3>General</h3>
                  <ul class="list-unstyled components">
       




				 <!--menuLivraison -->
					  <li>
                        <a href="#menu_livraison" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-laptop"></i>
                        Gestion des livraison
                        </a>
                        <ul class="collapse list-unstyled" id="menu_livraison">
                          
                           <li><a href="modify-livraison.php">Modifier une livraison</a></li>
                           <li><a href="delete-livraison.php">Supprimer une livraison</a></li>
                           <li><a href="afficher-livraison.php">Afficher les livraisons</a></li>
						   <li><a href="tracking.php">Tracking</a></li>
						   <li><a href="statstique.php">Statstique</a></li>
                        </ul>
                     </li>
					 <!--menu_livreur -->
					 <li>
                        <a href="#menu_livreur" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-laptop"></i>
                        Gestion des livreurs
                        </a>
                        <ul class="collapse list-unstyled" id="menu_livreur">
                          
                           <li><a href="add-livreur.php">Ajouter un livreur</a></li>
                           <li><a href="modify-livreur.php">Modifier un livreur</a></li>
                           <li><a href="delete-livreur.php">Supprimer un livreur</a></li>
                           <li><a href="afficher-livreur.php">Afficher les livreurs</a></li>
                        </ul>
                     </li>
					 <!--menuLivreurFin -->
                  </ul>
               </div>
               <!-- Menu Section End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">
                  

	
               </div>
               <!-- Menu Section End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">

               </div>
               <!-- Menu Section End -->
                
            </nav>
         </aside>
         <!-- End Sidebar -->
          
         <!-- Right Side Content Start -->
         <section id="content" class="seipkon-content-wrapper">
            <div class="page-content">
               <div class="container-fluid">
                   
                  <!-- Breadcromb Row Start -->

                  <!-- End Breadcromb Row -->
                   
                  <!-- Add Product Area Start -->
                <br /><br />  
           <div style="width:900px;">  
                  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
                  <!-- End Add Product Area -->
                   
               </div>
            </div>
             
            <!-- Footer Area Start -->
            <footer class="seipkon-footer-area">
               <p>Seipkon - Bootstrap Admin Template by <a href="#">Themescare</a></p>
            </footer>
            <!-- End Footer Area -->
             
         </section>
         <!-- End Right Side Content -->
          
      </div>
      <!-- End Wrapper -->
       
       
      <!-- jQuery -->
      <script src="assets/js/jquery-3.1.0.min.js"></script>
      <!-- Bootstrap JS -->
      <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
      <!-- Bootstrap-select JS -->
      <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
      <!-- Perfect Scrollbar JS -->
      <script src="assets/plugins/perfect-scrollbar/jquery-perfect-scrollbar.min.js"></script>
      <!-- Custom Select JS -->
      <script src="assets/plugins/bootstrap-select/js/custom-select.js"></script>
      <!-- Custom JS -->
      <script src="assets/js/seipkon.js"></script>
   </body>

<!-- Mirrored from themescare.com/demos/seipkon-admin-template/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:02:49 GMT -->
</html>
