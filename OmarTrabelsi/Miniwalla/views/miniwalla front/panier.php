<?PHP 
session_start();
if(!isset($_SESSION['login'])){
    header('Location: index.php');
}
include "../../core/Panier2C.php";
$panier1C = new PanierC();
$listePanier = $panier1C->afficherPanier($_SESSION['login']); 
//var_dump($listeEmployes->fetchAll()); 
if(isset($_SESSION['login']))
$count=$panier1C->Count($_SESSION['login']);
else $count=0;
?> 
<?PHP
include "../../core/serviceC.php";
$service1C=new ServiceC();
$listeServices=$service1C->afficherServices(); 
$prix=0;
$total=0;


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
    <title>miniWalla | Panier</title>
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
                                        <a class="dropdown-item" href="Livraison.php">Delivery</a>
                                        
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
                        <li class="nav-item"><span class="active"  class="cart-icon">Cart<i class="fas fa-shopping-cart"></i><span><?php echo "(".$count.")"; ?></span></span></li>
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
                                       <th>Type</th>
                                       <th>Numero</th> 
                                    </tr>
                                 </thead>
                                 <tbody> 
                                 <?PHP
                                 foreach($listeServices as $row){
                                 ?>
                                    <tr>
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
                                    //$total= $panier1C->MontontTotalSession($_SESSION['login']);
                                   // $prix =$panier1C->MontontTotalSession($_SESSION['login']); 

                                   
                                    
                                    ?>
                                    <tr>
                                <form method="POST" action="ModifierPanier.php">
                                        <td>
                                            <div class="card">
                                                <?PHP echo "<img src=\"../Backend/image/{$data['product_imgFace']}\" class=\"image1\">" ?>
                                                <?PHP echo "<img src=\"../Backend/image/{$data['elastic_img']}\" class=\"image2\">" ?>
                                            </div>
                                        </td>
                                        <td><?php echo $data['product_id'] ?></td>
                                        <input type="hidden" name="product_id" value=<?php echo $data['product_id'] ?>>
                                        <input type="hidden" name="id_panier" value=<?php echo $row['id_panier'] ?>>

                                        <td><input id="qte" name="qte" type="number" value="<?php echo $row['qte'] ?>" /></td>
                                        <?php
                                        $id=$data['product_id'];
                                           $connect = mysqli_connect("localhost", "root", "", "projet");
                                           $query = "select * from promotion where idProduit=$id"; 
                                           $result = mysqli_query($connect, $query);
                                           $p = mysqli_fetch_array($result);
                                           
                                            $promo=$p['tauxPromo'];
                                           
                                            $prix=$data['product_price']*$row['qte'];
                                            
                                           if(mysqli_num_rows($result)==1){
                                            
                                        ?>
                                        <td class="text-right"><?php echo $prix-=($prix*$promo)/100; $total+=$prix; ?> DT</td>
                                           <?php  } ?>
                                        <?php if(mysqli_num_rows($result)==0): ?>

                                        <td class="text-right"><?php echo $prix ; $total+=$prix; ?> DT</td>
                                        <?php endif ?>
                                        <td>
                                            <button class="btn btn-sm btn-danger " name="supprimer"><i class="fa fa-trash"></i></button>
                                            
                                                <button class="btn btn-primary "  name="modifier">Mettre a jour</button>
                                        </td>


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
                                if(!empty($total))
                                {
                                echo "<td class=\"text-right\">";
                                    if($total==0){
                                        echo "0"; 
                                    }else{
                                        echo $total;
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
                               if(!empty($total))
                                {
                                echo "<td class=\"text-right\">";
                                    if($total==0){
                                        echo "0 DT"; 
                                    }else{
									
										if(isset($_SESSION['CouponP']))
										{
											echo '<strike>'.$total.'</strike> DT -'.$_SESSION['CouponP'].'%';
										$total-=($total*$_SESSION['CouponP']/100);
										echo '<p>'.$total.'DT</p>';
										$_SESSION['total']=$total;
											
										}else{
											echo $total." DT";
											$_SESSION['total']=$total;
										}
                                    } 
                                }else{
                                    echo "<td class=\"text-right\">VIDE</td>"; 
                                }
                                ?>                            
                                </tr>
								<tr>
								<td>
								 <div class="form-group form-check">
								 <form action="Coupon.php" method="POST">
								 <i class="fa fa-gift"></i>
								 <label  for="coupon">Coupon Code:</label>
								<input type="text" id="coupon" name="coupon" class="form-control" placeholder="Coupon Code">
								<input type="submit" class="btn btn-primary" id="submit" name="submit" value="Apply">
								<div>
								<?php if(isset($_SESSION['CouponV'])){ echo $_SESSION['CouponV']; } ?>
								</div>
								</form>
								</div>
								</td>
								</tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="index.php"> <button class="btn btn-block btn-light">Continue Shopping</button></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <form action="passerCommande.php" method="POST">
                        <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                        <form>
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