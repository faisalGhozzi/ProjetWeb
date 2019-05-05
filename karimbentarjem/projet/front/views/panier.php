<?PHP
include "../core/Panier2C.php";
$panier1C = new PanierC();
$listePanier = $panier1C->afficherPanier(); 
//var_dump($listeEmployes->fetchAll());
?> 
<?PHP
include "../core/serviceC.php";
$service1C=new ServiceC();
$listeServices=$service1C->afficherServices(); 
//var_dump($listeEmployes->fetchAll());
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>miniWalla | About Us</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<style>
    .image1 {
        position: relative;
        top: 0;
        left: 0;
        width: 25%;
    }

    .image2 {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 25%;
    }

    .card {
        position: absolute;
        width: 25%;
        height: 25%;
        background-color: #f4f4f400;
        border: none;
    }
</style>

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
                                <a class="dropdown-toggle" href="wallets.html" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Portfeilles </a>
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
                        <li class="nav-item"><span class="active">Panier<i class="fas fa-shopping-cart"></i></span></li>
                        <li class="nav-item"><a href="logout.php" id="pop-up-button" onclick="popUp()">Logout<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i></a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--Sign in-->
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
    <!--Service-->
    <div id="bg-modalS">
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <form id="zoom-in-effect" class="form-container">
                        <div id="close" onclick="closePopUpS()">+</div>
                        <div class="form-group">
                        <div class="table-responsive advance-table"> 
                              <table id="button_datatables_example" class="table display table-striped table-bordered">
                                 <thead>
                                    <tr>
                                       <th>ID</th>
                                       <th>Type</th>
                                       <th>Numero</th> 
                                    </tr>
                                 </thead>
                                 <tbody> 
                                 <?PHP
                                 foreach($listeServices as $row){
                                 ?>
                                    <tr>
                                    <td><?PHP echo $row['service_id'];  ?></td>
                                    <td><?PHP echo $row['service_type']; ?></td>
                                    <td><?PHP echo $row['service_numero']; ?></td> 
                                    </tr>
                                    <?PHP 
                                 } 
                                 ?>
                                 </tbody>
                              </table> 
                            </form>  
                           </div>
                        </div>
                    </form>
                </section>
            </section>
        </section>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> Product</th>
                                <th scope="col"> ID Product</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-right">Price</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody> 

                            <?PHP
                          
                            foreach ($listePanier as $row) {
                                $produit = $panier1C->recupererDonneesProduit($row['product_id']);
                                foreach ($produit as $data) {
                                    $m = $panier1C->MontontTotal();


                                    ?>
                                    <tr>
                                        <td>
                                            <div class="card">
                                                <?PHP echo "<img src=\"../Backend/image/{$data['product_imgFace']}\" class=\"image1\">" ?>
                                                <?PHP echo "<img src=\"../Backend/image/{$data['elastic_img']}\" class=\"image2\">" ?>
                                            </div>
                                        </td>
                                        <td><?php echo $data['product_id'] ?></td>
                                        <td><input id="qteN" type="number" value="<?php echo $row['qte'] ?>" /></td>
                                        <td class="text-right"><?php echo (($data['product_price']) * ($row['qte'])) ?> DT</td>
                                        <td>
                                            <form method="POST" action="supprimerPanier.php" class="text-right">
                                                <button class="btn btn-sm btn-danger" name="supprimer"><i class="fa fa-trash"></i> </button>
                                                <input type="hidden" value="<?PHP echo $row['product_id']; ?>" name="id">
                                            </form>
                                            <form method="POST" action="ModifierPanier.php" class="text-right">
                                                <input type="hidden" value="<?PHP echo $row['id_panier']; ?>" name="id_panier">
                                                <input type="hidden" value="" id="qte" name="qte">
                                                <script language="javascript">
                                                    function load() {
                                                        var qte = document.getElementById("qteN");
                                                        var qteF = document.getElementById("qte");
                                                        qteF.value = qte.value;
                                                    }
                                                </script>
                                                <input type="hidden" value="<?PHP echo $data['product_id']; ?>" name="id_produit">


                                                <button class="btn btn-primary" onclick="load()" name="modifier">Mettre a jour</button>
                                            </form>



                                    </tr>


                                <?php
                            }
                        } ?> 

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sub-Total</td> 
                                <?php 
                                if(!empty($m))
                                {
                                echo "<td class=\"text-right\">";
                                    if($m==0){
                                        echo "0"; 
                                    }else{
                                        echo $m;
                                    } 
                                    echo " DT</td>";
                                }else{
                                    echo "<td class=\"text-right\">VIDE</td>";
                                    
                                }
                                ?>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <?php 
                                if(!empty($m))
                                {
                                echo "<td class=\"text-right\">";
                                    if($m==0){
                                        echo "0"; 
                                    }else{
                                        echo $m;
                                    } 
                                    echo " DT</td>";
                                }else{
                                    echo "<td class=\"text-right\">VIDE</td>";
                                    
                                }
                                ?>                            
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="acceuil.php"> <button class="btn btn-block btn-light">Continue Shopping</button></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <a href="ajouterCommande.php"><button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                    </div>
                </div>
            </div>


        </div> 
        <center>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6 btn btn-warning" style="left:25%; ">
                    <a href="#" id="pop-up-button" onclick="popUpS()">Service Client</a>
                </div>
            </div>
        </div> 
        </center>
    </div>
    <script src="src/bootstrap-input-spinner.js">
    </script>
    <script>
        $("input[type='number']").inputSpinner()
    </script>


</body>

</html>