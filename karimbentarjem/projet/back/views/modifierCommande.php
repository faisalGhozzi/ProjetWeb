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
      <title>MiniWalla Template</title>
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

   </head>

<body data-background="images/image1.jpg">

	<!-- Add Product Area Start -->
                  <div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <div class="add-product-form-group" >
                                    <h3>Modifier la commande</h3>
                                    <HTML>
<head>
</head>
<body>
<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
if (isset($_GET['reference'])){
	$commandeC=new CommandeC();
    $result=$commandeC->recupererEmploye($_GET['reference']);
    
	foreach($result as $row){
		$reference=$row['reference'];
		$nom=$row['nom'];
		$mail=$row['mail'];
		$telephone=$row['telephone'];
		$date=$row['date'];
		$adresse=$row['adresse'];
		
?>
<form method="POST">
<table>
<caption>Modifier Commande</caption>
<tr>
<td>Reference</td>
<td><input type="number" name="reference" required value="<?PHP echo $reference ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" required value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>mail</td>
<td><input type="mail" name="mail" required placeholder="server@exemple.com" value="<?PHP echo $mail ?>"></td>
</tr>
<tr>
<td>telephone</td>
<td><input type="number" name="telephone" required value="<?PHP echo $telephone ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="text" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<tr>
<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="ref_ini" value="<?PHP echo $_GET['reference'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$commande=new commande($_POST['reference'],$_POST['nom'],$_POST['mail'],$_POST['telephone'],$_POST['date'],$_POST['adresse']);
	$commandeC->modifierEmploye($commande,$_POST['ref_ini']);
	echo $_POST['ref_ini'];
	header('Location: commandeB.php');
}
?>
</body>
</HTMl>

                                 </div>
                              </div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Add Product Area -->
                   
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
</html>
</html>

