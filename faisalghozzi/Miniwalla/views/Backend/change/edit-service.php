<?php session_start();
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
      <title>Miniwalla Admin</title>
      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <!-- Animate CSS -->
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="assets/plugins/bootstrap/bootstrap.min.css">
      <!-- Font awesome CSS -->
            <link href="fontawesome/css/all.min.css" rel="stylesheet">

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
               <img src="assets/img/logo.png" alt="logo">
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
                              <input type="search" placeholder="Search..." >
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
                           <li class="dropdown">
                              <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                              <i class="fa fa-envelope-o"></i>
                              <span>5</span>
                              </a>
                              <div class="message-box dropdown-menu animated bounceIn">
                                 <div class="message-header">
                                    <h4>5 new Message</h4>
                                    <a href="#">mark as read</a>
                                 </div>
                                 <div class="message-body">
                                    <ul>
                                       <li>
                                          <a href="#" class="single-message">
                                             <div class="message-img">
                                                <img src="assets/img/msg-4.png" alt="message" />
                                                <span class="online-message"></span>
                                             </div>
                                             <div class="message-txt">
                                                <h4>David Johnson</h4>
                                                <p>I like your portfolio, let's start.</p>
                                                <span>56 seconds ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-message">
                                             <div class="message-img">
                                                <img src="assets/img/msg-1.png" alt="message" />
                                                <span class="busy-message"></span>
                                             </div>
                                             <div class="message-txt">
                                                <h4>Margaret Govan</h4>
                                                <p>Can we have call in this week ?</p>
                                                <span>14 hourse ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-message">
                                             <div class="message-img">
                                                <img src="assets/img/msg-3.png" alt="message" />
                                                <span class="online-message"></span>
                                             </div>
                                             <div class="message-txt">
                                                <h4>Emanual Doe</h4>
                                                <p>A National Book Award Finalist An...</p>
                                                <span>a day ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-message">
                                             <div class="message-img">
                                                <img src="assets/img/msg-2.png" alt="message" />
                                                <span class="away-message"></span>
                                             </div>
                                             <div class="message-txt">
                                                <h4>Eric Alsobrook</h4>
                                                <p>A National Book Award Finalist An...</p>
                                                <span>2 days ago</span>
                                             </div>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="message-footer">
                                    <a href="#"><i class="fa fa-angle-down"></i>see all messages</a>
                                 </div>
                              </div>
                           </li>
                           <!-- Message Toggle Start -->
                            
                           <!-- Notification Toggle Start -->
                           <li class="dropdown">
                              <a class="dropdown-toggle cart-icon" href="#" data-toggle="dropdown">
                              <i class="fa fa-bell-o"></i>
                              <span>3</span>
                              </a>
                              <div class="notification-box dropdown-menu animated bounceIn">
                                 <div class="notification-header">
                                    <h4>3 new notification</h4>
                                    <a href="#">clear all</a>
                                 </div>
                                 <div class="notification-body">
                                    <ul>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_yellow">
                                                <i class="fa fa-envelope-o"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>you have received an email</h4>
                                                <span>56 seconds ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_green">
                                                <i class="fa fa-check"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>Successful transaction of $210</h4>
                                                <span>1 minutes ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_red">
                                                <i class="fa fa-thumbs-up"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>33 pending post for approval</h4>
                                                <span>3 minutes ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_blue">
                                                <i class="fa fa-comments-o"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>2 new comments found</h4>
                                                <span>5 minutes ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_green">
                                                <i class="fa fa-truck "></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>order details confirmation</h4>
                                                <span>43 seconds ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_yellow">
                                                <i class="fa fa-envelope-o"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>you have received an email</h4>
                                                <span>56 seconds ago</span>
                                             </div>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="#" class="single-notification">
                                             <div class="notification-img bg_green">
                                                <i class="fa fa-check"></i>
                                             </div>
                                             <div class="notification-txt">
                                                <h4>Successful transaction of $210</h4>
                                                <span>1 minutes ago</span>
                                             </div>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="notification-footer">
                                    <a href="#"><i class="fa fa-angle-down"></i>see all notification</a>
                                 </div>
                              </div>
                           </li>
                           <!-- Notification Toggle End -->
                            
                           <!-- Profile Toggle Start -->
                           <li class="dropdown">
                              <a class="dropdown-toggle profile-toggle" href="#" data-toggle="dropdown">
                                 <img src="assets/img/avatar.jpg" class="profile-avator" alt="admin profile" />
                                 <div class="profile-avatar-txt">
                                    <p><p><?PHP echo $_SESSION['name']; ?></p></p>
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
                     <h3><p><?PHP echo $_SESSION['name']; ?></p></h3>
                     <p>Welcome Admin !</p>
                  </div>
               </div>
               <!-- Sidebar Profile End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">
                  <h3>General</h3>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="index.php">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboard
                        </a>
                     </li>
                     <li class="active">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        e-Commerce
                        </a>
                        <ul class="collapse list-unstyled" id="ecommerce">
                           <li><a href="product.html">all products</a></li>
                           <li><a href="add-product.html">add new product</a></li>
                           <li><a href="edit-product.html">Edit product</a></li>
                           <li><a href="order-list-product.html">product order list</a></li> 
                           <li><a href="add-service.html">add New Service</a></li> 
                           <li><a href="add-service.html">add New Service</a></li> 
                           <li><a href="add-category.html">add New Category</a></li> 
                           <li><a href="add-elastic.html">add New Elastic</a></li>

                        </ul>
                     </li> 
                     <li>
                        <a href="#createpage" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-file"></i>
                        pages
                        </a>
                        <ul class="collapse list-unstyled" id="createpage">
                           <li><a href="pages.html">all pages</a></li>
                           <li><a href="create-page.html">create a page</a></li>
                           <li><a href="edit-page.html">Edit Page</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-th"></i>
                        Advance apps
                        </a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="chatting.html">Chatting</a></li>
                           <li><a href="notes.html">notes</a></li>
                           <li><a href="apps-contact-list.html">Contact/Employee</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#mail" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        mailbox
                        </a>
                        <ul class="collapse list-unstyled" id="mail">
                           <li><a href="compose.html">compose</a></li>
                           <li><a href="inbox.html">inbox</a></li>
                           <li><a href="mail-read.html">read</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ui_elements" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-laptop"></i>
                        UI Elements
                        </a>
                        <ul class="collapse list-unstyled" id="ui_elements">
                           <li><a href="ui_button.html">Button</a></li>
                           <li><a href="ui_panels.html">Panels</a></li>
                           <li>
                              <a href="#icon" data-toggle="collapse" aria-expanded="false">
                              Icons
                              </a>
                              <ul class="collapse list-unstyled" id="icon">
                                 <li><a href="icon-fontawesome.html">Font awesome</a></li>
                                 <li><a href="icon-glyphicons.html">Glyphicons</a></li>
                                 <li><a href="icon-themify.html">Themify Icons</a></li>
                              </ul>
                           </li>
                           <li><a href="ui_tab_accordion.html">Tabs & Accordions</a></li>
                           <li><a href="ui_sweet_alerts.html">sweet Alerts</a></li>
                           <li><a href="ui_progressbars.html">Progress bars</a></li>
                           <li><a href="ui_carousel.html">Carousel</a></li>
                           <li><a href="ui_breadcrumbs.html">breadcrumbs</a></li>
                           <li><a href="ui_pagination.html">pagination</a></li>
                        </ul>
                     </li>
					 <!-- MENU Gestion des Clients --> 
					 <li>
                        <a href="#gestionClients" data-toggle="collapse" aria-expanded="false">
						<i class="fas fa-users"></i>
                        Gestion des Clients
                        </a>
                        <ul class="collapse list-unstyled" id="gestionClients">
                           <li><a href="AjoutClient.php">Ajouter Client</a></li>
						   <li><a href="modifierClient.php">Modifier Client</a></li>
						   <li><a href="supprimerClient.php">Supprimer Client</a></li>
						   <li><a href="AfficherClients.php">Afficher la liste des Clients</a></li>
						   <li><a href="RechercheClients.php">Recherchers des Clients</a></li>

                        </ul>
                     </li>
					 <!--  FIN MENU Gestion des Clients --> 
					 			<!-- MENU Gestion des Admins --> 
					 <li>
                        <a href="#gestionAdmins" data-toggle="collapse" aria-expanded="false">
						<i class="fas fa-users"></i>
                        Gestion des Adminstrateurs
                        </a>
                        <ul class="collapse list-unstyled" id="gestionAdmins">
                           <li><a href="AjouterAdmin.php">Ajouter Admin</a></li>
						   <li><a href="modifierAdmin.php">Modifier Admin</a></li>
						   <li><a href="supprimerAdmin.php">Supprimer Admin</a></li>
						   <li><a href="AfficherAdmins.php">Afficher la liste des Admins</a></li>
						   	<li><a href="RechercheAdmins.php">Recherchers des Admins</a></li>

                        </ul>
                     </li>
					 <!--  FIN MENU Gestion des Admins --> 
					 <!-- MENU Gestion des Promotion --> 
					 <li>
                        <a href="#gestionPromo" data-toggle="collapse" aria-expanded="false">
						<i class="fas fa-percent"></i>
                        Gestion des Promotions
                        </a>
                        <ul class="collapse list-unstyled" id="gestionPromo">
                           <li><a href="ajoutPromotion.php">Add Promo</a></li>
						   <li><a href="modifierPromotion.php">Modify Promo</a></li>
						   <li><a href="supprimerPromotion.php">Delete Promo</a></li>
						   <li><a href="AfficherPromotions.php">List All Promos</a></li>
                        </ul>
                     </li>
					 <!--  FIN MENU Gestion des Promotion -->
					 <!-- MENU Gestion des Coupons --> 
					 <li>
                        <a href="#gestionCoupon" data-toggle="collapse" aria-expanded="false">
						<i class="fa fa-gift"></i>
                        Gestion des Coupons
                        </a>
                        <ul class="collapse list-unstyled" id="gestionCoupon">
                           <li><a href="AjouterCoupon.php">Ajouter Coupon</a></li>
						   <li><a href="modifierCoupon.php">Modifier Coupon</a></li>
						   <li><a href="supprimerCoupon.php">Supprimer Coupon</a></li>
						   <li><a href="AfficherCoupons.php">Afficher la liste des Coupon</a></li><li><a href="statistics.php">Coupons Statistics</a></li>
                        </ul>
                     </li>
					 <!--  FIN MENU Gestion des Coupons -->
					  <!-- MENU Newsletters--> 
					 <li>
                        <a href="#newsletter" data-toggle="collapse" aria-expanded="false">
						<i class="fas fa-newspaper"></i>
                        Newsletters
                        </a>
                        <ul class="collapse list-unstyled" id="newsletter">
                           <li><a href="Newsletters.php">Envoyer un Newsletter</a></li>
                        </ul>
                     </li>
					 <!--  FIN MENU Newsletters -->
					 	 <!--menuLivreur -->
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
					 <!--Menu Produit -->
					  <li>
                        <a href="#product" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        Gestion Produits
                        </a>
                        <ul class="collapse list-unstyled" id="product">
                           <li><a href="add-product.php">add new product</a></li>
                           <li><a href="edit-product.html">Edit product</a></li>
                           <li><a href="add-service.php">add New Service</a></li> 
                           <li><a href="add-category.php">add New Category</a></li> 
                           <li><a href="add-elastic.php">add New Elastic</a></li>
                           <li><a href="table.product.php">Products List</a></li>
                           <li><a href="table.category.php">Category List</a></li>
                           <li><a href="table.elastic.php">Elastic List</a></li>
                           <li><a href="table.service.php">Services List</a></li>
						   
                        </ul>
                     </li>
					 <!--Fin Menu Produit -->
					 
					 
					 <!--Menu Commande -->
					  <li>
                        <a href="#commande" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        Commande
                        </a>
                        <ul class="collapse list-unstyled" id="commande">
                           <li><a href="commandeB.php">Commande</a></li>
                           
						   
                        </ul>
                     </li>
					 <!--Fin Menu Commande -->
					 
					 		 <!--Menu Reclamation -->
					  <li>
                        <a href="#reclamation" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-laptop"></i>
                        Reclamation
                        </a>
                        <ul class="collapse list-unstyled" id="reclamation">
                           <li><a href="reclamation.php">Reclamation</a></li>
                           
						   
                        </ul>
                     </li>
					 <!--Fin Menu Reclamation -->
                  </ul>
               </div>
               <!-- Menu Section End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">
                  <h3>Forms,Table & widget</h3>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="seipcon_widget.html">
                        <i class="fa fa-th"></i>
                        Widgets
                        </a>
                     </li>
                     <li>
                        <a href="#charts" data-toggle="collapse" aria-expanded="false">
                        <i class="fas fa-chart-pie"></i>
                        Charts
                        </a>
                        <ul class="collapse list-unstyled" id="charts">
                           <li><a href="chartsjs.html">chart js</a></li>
                           <li><a href="morrris.html">morris</a></li>
                           <li><a href="sparkline.html">sparkline</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-edit"></i>
                        Forms
                        </a>
                        <ul class="collapse list-unstyled" id="forms">
                           <li><a href="general-form.html">General Form</a></li>
                           <li><a href="advance-components.html">Advance Components</a></li>
                           <li><a href="form-layouts.html">Form layouts</a></li>
                           <li><a href="form-validation.html">form validation</a></li>
                           <li><a href="form-wizards.html">form wizards</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#table" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-table"></i>
                        Tables
                        </a>
                        <ul class="collapse list-unstyled" id="table">
                           <li><a href="basic-table.html">basic table</a></li>
                           <li><a href="advance-table.html">table Advance</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- Menu Section End -->
                
               <!-- Menu Section Start -->
               <div class="menu-section">
                  <h3>Extra components</h3>
                  <ul class="list-unstyled components">
                     <li>
                        <a href="#ex_components" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-book"></i>
                        Additional Pages
                        </a>
                        <ul class="collapse list-unstyled" id="ex_components">
                           <li><a href="profile.html">profile page</a></li>
                           <li><a href="invoice.html">Invoice</a></li>
                           <li><a href="gallery.html">gallery</a></li>
                           <li><a href="blank.html">Blank</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ex_authentication" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-unlock-alt"></i>
                        Authentication 
                        </a>
                        <ul class="collapse list-unstyled" id="ex_authentication">
                           <li><a href="login.html">Login</a></li>
                           <li><a href="register.html">Register</a></li>
                           <li><a href="lockscreen.html">Lockscreen</a></li>
                           <li><a href="recover-pass.html">Recover password</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ex_error" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-exclamation-circle"></i>
                        Error Pages 
                        </a>
                        <ul class="collapse list-unstyled" id="ex_error">
                           <li><a href="error-404.html">404 Not Found</a></li>
                           <li><a href="error-505.html">505 Forbidden</a></li>
                           <li><a href="error-500.html">500 Internal Server</a></li>
                           <li><a href="error-503.html">503 Service Unavailable</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#ex_multlable" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-map-signs"></i>
                        Multilevel
                        </a>
                        <ul class="collapse list-unstyled" id="ex_multlable">
                           <li><a href="#">Level One</a></li>
                           <li>
                              <a href="#ex_multlable_2" data-toggle="collapse" aria-expanded="false">
                              Level One
                              </a>
                              <ul class="collapse list-unstyled" id="ex_multlable_2">
                                 <li><a href="#">Level Two</a></li>
                                 <li>
                                    <a href="#ex_multlable_3" data-toggle="collapse" aria-expanded="false">
                                    Level Two
                                    </a>
                                    <ul class="collapse list-unstyled" id="ex_multlable_3">
                                       <li><a href="#">Level Three</a></li>
                                       <li><a href="#">Level Three</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </li>
                           <li><a href="#">Level One</a></li>
                        </ul>
                     </li>
                  </ul>
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
                  <div class="row">
                     <div class="col-md-12">
                        <div class="breadcromb-area">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-left">
                                    <h3>Edit Service</h3>
                                 </div>
                              </div>
                              <div class="col-md-6 col-sm-6">
                                 <div class="seipkon-breadcromb-right">
                                    <ul>
                                       <li><a href="index.php">home</a></li>
                                       <li>e-Commerce</li>
                                       <li>Edit Service</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Breadcromb Row -->
                   
                  <!-- Edit Service Area Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <div class="add-product-form-group">
                                    <h3>Service Info</h3> 
                                    <?PHP
                                       include "../entites/service.php";
                                       include "../core/serviceC.php";
                                       if (isset($_GET['id'])){
                                          $serviceC=new ServiceC();
                                          $result=$serviceC->recupererService($_GET['id']);
                                          foreach($result as $row){
                                             $id=$row['service_id'];
                                             $typee=$row['service_type'];
                                             $numero=$row['service_numero'];
                                     ?>
                                    <form method="POST" action="modifierService.php">
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <label>Service Name</label>
                                                <input type="text" name="id"  readonly value="<?PHP echo $id ?>">
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <p>
                                                <label>Type</label>
                                                <input type="text" name="type" value="<?PHP echo $typee ?>">
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <p>
                                                <label>Numero</label>
                                                <input type="text" name="numero"  value="<?PHP echo $numero ?>">
                                             </p>
                                          </div>
                                          
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <button type="submit" class="btn btn-success" name="modifier" value="modifier" >
                                                <i class="fa fa-check"></i>
                                                Save Info
                                                </button>
                                                <button type="reset" class="btn btn-danger" >
                                                <i class="fa fa-times"></i>
                                                Cancel
                                                </button> 
                                             </p>
                                          </div>
                                       </div> 
                                       <tr>
                                       <td></td>
                                       <td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
                                       </tr>
                                    </form> 
                                    <?PHP
                                       }
                                       if (isset($_POST['modifier'])){
                                          $service=new service($_POST['id'],$_POST['type'],$_POST['numero']);
                                          $serviceC->modifierService($service,$_POST['id_ini']);
										  	 header('Location: table.product.php');

										  }
                                       }
                                       ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Add Service Area -->
                   
               </div>
            </div>
             
            <!-- Footer Area Start -->
            <footer class="seipkon-footer-area">
               <p>Miniwalla Admin by <a href="#">Themescare</a></p>
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