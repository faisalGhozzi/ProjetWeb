<?php
include"../../entites/client.php";
include"../../core/clientC.php";
include"../../entites/Livraisons.php";
include"../../core/LivraisonC.php";
include"../../core/livreurC.php";

session_start();

require('fpdf/fpdf.php');

	
 
 

$ClientC = new ClientF();
$resultat=$ClientC->rechercherClient($_SESSION['login']);
$LivreurC= new LivreurC();

foreach($resultat as $row)
{}

if(isset($_POST['Imprimer']))
{
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$pdf->Cell(40,35,"                                         "."MiniWalla Services");
$pdf->Ln();
$pdf->Cell(40,35,"                                         "."Delivery details");
$pdf->Ln();
$pdf->Cell(40,10,"Name : ".$row['last_name']." ".$row['first_name']);
$pdf->Ln();
$pdf->Cell(40,10,"Adress : ".$row['adress']);
$pdf->Ln();
$pdf->Cell(40,10,"governorate : ".$row['Gouvernorat']);
$pdf->Ln();
$pdf->Cell(40,10,"Phone Number :".$row['Num_Tel']);
$pdf->Ln();
$pdf->Cell(40,10,"Delivery amount         10DT");
$pdf->Ln();
$pdf->Cell(40,10,"Amount of the Order         ".$_SESSION['total']."DT");
$pdf->Ln();
$pdf->Cell(40,10,"Total amount         ".($_SESSION['total']+10)."DT");
$pdf->Output("F","details.pdf");
 header('Location: details.pdf');
}





	
	

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    <title>miniWalla | Delivery</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	
	

	
	
	

	</head>
<body onload="">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img id="logo" src="images/logoWhite.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                    <?PHP if(isset($_SESSION['login'])){   ?>
                        <li class="nav-item">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?>'s Settings </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                         <a class="dropdown-item" href="Profile.php">Profile</a>
                                        <a class="dropdown-item" href="ModifyPass.php">Change Password</a>
                                        <a class="dropdown-item" href="Livraison.php">Delivery</a><a class="dropdown-item" href="tracking.php">Track your Orders</a>
                                        
                                        <a class="dropdown-item" href="signout.php">Sign out</a>
                                    </div>
                                </div>
                            </li>                        <?PHP } ?>
                        <?PHP if(!isset($_SESSION['login'])){   ?>
                        <li class="nav-item"><a href="#" id="pop-up-button" onclick="popUp()">Sign in</a></li>
                        <?PHP } ?>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="wallets.html" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wallets </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="standard.php">Standard</a>
                                    <a class="dropdown-item" href="ethnic.php">Ethnic</a>
                                    <a class="dropdown-item" href="secret message.php">Secret message</a>
                                    <a class="dropdown-item" href="lovers.php">lovers</a>
                                </div>
                            </div>
                        </li>
                        
                        <li class="nav-item"><a href="contact.php">Contact</a></li>
                        <li class="nav-item"><a href="about.html">About Us</a></li>
                        <li class="nav-item"><span class="active"  class="cart-icon">Cart<i class="fas fa-shopping-cart"></i></span></li>
                    </ul>
            </div>
        </div>
        </nav>
    </header>
    <div id="bg-modal">
                <section class="container-fluid"> 
                        <section class="row justify-content-center">
                            <section class="col-12 col-sm-6 col-md-6 col-lg-4">
                            </section>
                        </section>
                </section>
    </div>
<!--About-->
<div id="bg-modal-about">
    <section class="container-fluid"> 
            <section class="row justify-content-center">
                <section class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="zoom-in-effect" class="form-container">
                                <div id="close" onclick="closePopUpAbout()">+</div>
                            <aside class="left-side col-lg-3 col-xl-3 col-md-3 col-sm-12 col-xs-12">
                                <h2 class="about-header">About Us</h2>
                                <p class="para-header">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt totam id distinctio porro perferendis dolore, ratione voluptas ullam commodi nobis aliquam aut modi eum illo accusamus ea laudantium quam saepe?
                                Pariatur aperiam autem saepe quis dignissimos suscipit dicta omnis repellendus sequi aut in praesentium, laboriosam repudiandae at tempore quidem dolore voluptates cumque eius? Illum esse similique suscipit provident non. Maiores.
                                Maxime praesentium quaerat aliquid, odit, eligendi asperiores dolorem amet sint reiciendis nesciunt exercitationem reprehenderit perspiciatis minima modi temporibus voluptate laudantium doloremque qui quidem, non fuga at ullam molestiae! Consequatur, corrupti.
                                Ad accusantium eaque recusandae quisquam beatae dignissimos cupiditate optio ullam rerum explicabo repudiandae dolorum esse sit aliquam iure, id doloribus adipisci dolorem ea ex accusamus omnis officiis? Totam, minima neque?
                                Commodi aspernatur eligendi praesentium enim quisquam porro iste, illo magni, nobis inventore ullam aperiam necessitatibus fuga in impedit voluptas veritatis voluptates dignissimos quae quasi hic vel neque. Error, temporibus labore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum praesentium, corporis incidunt officia rerum saepe minus maiores rem ex commodi doloribus laudantium voluptatum eveniet iusto perferendis. Esse animi perspiciatis minima?</p>
                            </aside>
                            <section class="right-side col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
                                <video controls width="99%" height="99%">
                                    <source src="video/Walking+Bass+Jazz+Guitar+Lesson+-+All+the+Things+We+Are%3A+Breakdown+-+Sean+McGowan.mp4" type="video/mp4">
                                </video>
                            </section>                                
                        </div>
                </section>
            </section>
    </section>
</div>


<div class="container mb-4">
    <div class="row">
        <div class="col-12">
        <h1>You can now print your delivery details. Thank you for your confidence</h1>
		<form method="POST" action="PDF.php">
            <center>
        <div class="col-sm-12  col-md-6">
        <button type="submit" name="Imprimer" class="btn btn-primary btn-block submit-btn">Print</button>
        <a href="index.php"> <button class="btn btn-block btn-light">Continue Shopping</button></a>
        </div>
                      
                   
		</form>

</div>

</body>
</html>