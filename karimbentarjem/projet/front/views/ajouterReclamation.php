

<?php
session_start();
if(isset($_SESSION['login_user']) and $_SESSION['login_user']=="karim"){
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="javaScript/popUpSignup.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/otherPages.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Poiret+One|Quicksand:300,400,500,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    <title>miniWalla | Contact</title>

      <!-- Title -->
      <title>MiniWalla Template</title>
      
      <link rel="stylesheet" href="assets/css/seipkon.css">
      
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="acceuil.php"><img id="logo" src="images/logoWhite.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="wallets.html" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portefeuilles   </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="standard.php">Standard</a>
                                    <a class="dropdown-item" href="ethnic.php">Ethnic</a>
                                    <a class="dropdown-item" href="secret message.php">Secret message</a>
                                    <a class="dropdown-item" href="carbon.php">Carbon</a>
                                </div>
                            </div>
                        </li>
                    <li class="nav-item"><a href="Phonecase.html">Phone Case</a></li>
                   <li class="nav-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="wallets.html" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="ajouterReclamation.php">Reclamation</a>
                                </div>
                            </div>
                        </li>
                    <li class="nav-item"><a href="about.html">About Us</a></li>
                    <li class="nav-item"><a href="panier.php">Panier<i class="fas fa-shopping-cart"></i></a></li>
                    <li class="nav-item"><a href="logout.php" id="pop-up-button" onclick="popUp()">Logout<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i></a></li>

                </ul>
            </div>
        </div>
        </nav>
    </header>

<!-- Mirrored from themescare.com/demos/seipkon-admin-template/add-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Feb 2019 17:02:49 GMT -->


	<!-- Add Product Area Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <div class="add-product-form-group" >
                                    <h3>Passer une réclamation</h3>
                                    <form action="ajoutReclamation.php" method="POST">
                                       
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <label>*L'identifiant du client</label>
                                                  <div class="form-group__content">
                                                    <select class="form-control" name="id_client" id="exampleSelectGender" >
  //Il ne manque pas quelque chose dans ton select ? Genre le nom du champs ?
<?php
$db = mysql_connect('localhost', 'root', '') or exit(mysql_error());// on sélectionne la base
mysql_select_db('projet2e',$db) or exit(mysql_error());
 
 
$sql = "SELECT id FROM clients";
$res = mysql_query($sql) or exit(mysql_error());
while($data=mysql_fetch_array($res)) {
   echo '<option>'.$data["id"].'</option><br/>'; //Attention à ne pas oublier le . qui sert à concaténer ton expression
}
 
// on ferme la connexion à mysql
mysql_close(); //Facultatif, source de bug sur certaines versions de Wamp
?>
   
                                                    </select>
                                                  </div>
                                             </p>
                                          </div>
                                       </div>
                                       
                                       <div class="row">
                                          <div class="col-md-12" >
                                             <p>
                                                <label>*Nom et Prénom</label>
                                                <input  name="pseudo"  type="text" placeholder="Entrer votre nom et prénom" required>
                                                <span id='missPrenom'></span>
                                             </p>

                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <label>*Sujet de la réclamation</label>
                                                <input  name="sujet" type="text" placeholder="Le sujet de votre reclamation." required>
                                                <span id='missPrenom'></span>
                                             </p>
                                          </div>
                                       </div>
                                       
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <label>Description</label>
                                                <textarea  name="description" type="text" placeholder="Réclamation"  ></textarea>
                                             </p>
                                          </div>
                                       </div>
                                       <div class="row">
                                          <div class="col-md-12">
                                             <p>
                                                <button type="submit" class="btn btn-success" id="ajouter" >
                                                <i class="fa fa-check" ></i>
                                                Ajouter
                                                </button>
                                                
                                             </p>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <script>
            var formValid = document.getElementById('ajouter');
            var pseudo = document.getElementById('pseudo');
            var sujet = document.getElementById('sujet');
            var description = document.getElementById('description');
            var missPrenom = document.getElementById('missPrenom');
            
            formValid.addEventListener('click', validation);
            
            function validation(event){
                //Si le champ est vide
                if (((prenom.validity.valueMissing)&&(prenom.validity.valueMissing)&&(prenom.validity.valueMissing))){
                    event.preventDefault();
                }
            }
        </script>
                  <!-- End Add Product Area -->
                   

      
        <div class="container">
          <p>
            ©  Copyright by <strong>MinniWalla Store</strong>. </p>
        </div>
    </body> 
   
    
    <!-- Plugins-->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/jquery.waypoints.min.js"></script>
    <script src="plugins/jquery.countTo.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/slick-animation.min.js"></script>
    <script src="plugins/jquery.slimscroll.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>

<!-- Mirrored from warethemes.com/html/bready/order-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Mar 2019 22:26:53 GMT -->

<?php
}
else{
    header("location: signup.php"); 
}
?>
</html>