<?php
include_once "../../core/productC.php";
include_once "../../core/elasticC.php";
session_start();
$product1C = new ProductC();
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $prod = $product1C->recupererProduitsAvecElastique($id);
}
else if(isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['id']=$id;
    $prod = $product1C->recupererProduitsAvecElastique($id);
}

if(isset($_GET['name'])){
    $color = $_GET['name'];
}
else{
    $color = -1;
}
$elastic1C = new ElasticC();
if($color == -1){
    $listeElastique = $elastic1C->afficherElastiques();
}
else{
    $listeElastique = $elastic1C->chercherNom($color);
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
    <link rel="stylesheet" href="css/buy-page.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Poiret+One|Quicksand:300,400,500,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>miniWalla | Phone case</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html"><img id="logo" src="images/logoWhite.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#" id="pop-up-button" onclick="popUp()">Sign in</a></li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="wallets.html" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portefeuilles </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="standard.php">Standard</a>
                                    <a class="dropdown-item" href="ethnic.php">Ethnic</a>
                                    <a class="dropdown-item" href="secret message.php">Secret message</a>
                                    <a class="dropdown-item" href="carbon.php">Carbon</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="Phonecase.html">Phone Case</a></li>
                        <li class="nav-item"><a href="contact.html">Contact</a></li>
                        <li class="nav-item"><a href="about.html">About Us</a></li>
                        <li class="nav-item"><a href="panier.html">Panier<i class="fas fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="bg-modal">
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <form id="zoom-in-effect" class="form-container">
                        <div id="close" onclick="closePopUp()">+</div>
                        <div class="form-group">
                            <img class="logofull" src="images/logo-full.png">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            <a href="#" class="normal"><small id="passwordHelp">Forgot password?</small></a>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Stay connected</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block submit-btn">Submit</button>
                        <hr>
                        <a class="btn btn-primary btn-block new-btn" href="signup.html">Create new account</a>
                    </form>
                </section>
            </section>
        </section>
    </div>
    <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                           
                        <aside class="right-side col-lg-5 col-xl-5 col-md-5 col-sm-12 col-xs-12">
                            <h2>Choose your elastic</h2>
                            <form method="POST" action="searchColor.php">
                            <input type="text" placeholder="Color .." name="search">
                            <input type="submit" name="searchB" value="search" >
                            <input type="submit" name="searchAll" value="Show all" >
                            <?php foreach($listeElastique as $row){

                                ?>
                                <form method="POST">
                                <div class="picker">
                                <?PHP echo "<input class=\"btn btn-primary\" style=\"width:30px\" type=\"submit\" name=\"changer\" value={$row['elastic_id']}><img src=\"../Backend/image/{$row['elastic_img']}\" class=\"mini\" ><a>" ?> 
                                <?php
                                    if(isset($_POST["changer"])){
                                        $prod = $product1C->changerElastique($_SESSION['id'],$row['elastic_id']);
                                    }
                                ?>
                                </div>
                                </form>
                            <?php 
                            }
                            ?>
                            </form>
                        </aside>
                        <div class="left-side col-lg-8 col-xl-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="product">
                    <?php foreach ($prod as $row) {
                        ?>
                    <div class="card">
                        <?PHP echo "<img src=\"../Backend/image/{$row['product_imgFace']}\" class=\"image1\">" ?>
                        <?PHP echo "<img src=\"../Backend/image/{$row['elastic_img']}\" class=\"image2\" >" ?>
                    </div>
                    <?php

                }
                ?>
                </div>    
                        </div>                                
                </div>
    </div>
</body>

</html> 