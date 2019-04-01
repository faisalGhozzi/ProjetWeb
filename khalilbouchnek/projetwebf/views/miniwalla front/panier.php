<?PHP
include "../../core/Panier2C.php";
$panier1C = new PanierC();
$listePanier = $panier1C->afficherPanier();

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
    .img {
        width: 50px;
        height: 50px;
    }
</style>

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
                        <li class="nav-item"><span class="active">Panier<i class="fas fa-shopping-cart"></i></span></li>
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
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col"> Image FACE</th>
                                <th scope="col"> Image TAIL</th>
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
                                    <?PHP echo "<img src=\"image/{$data['product_imgFace']}\" class=\"img\">" ?>
                                </td>
                                <td>
                                    <?PHP echo "<img src=\"image/{$data['product_imgTail']}\" class=\"img\">" ?>
                                </td>
                                <td><?php echo $data['product_id'] ?></td>
                                <td><input  id="qteN" type="number" value="<?php echo $row['qte'] ?>" /></td>
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
                                    function load()
                                    {
                                    var qte = document.getElementById("qteN");
                                    var qteF = document.getElementById("qte");
                                    qteF.value=qte.value;
                                    }

                                    </script>
                                    <input type="hidden" value="<?PHP echo $data['product_id']; ?>" name="id_produit"> 


                                        <button class="btn btn-primary"  onclick="load()"name="modifier">Mettre a jour</button>
                                    </form>



                            </tr>


                            <?php 
                        }
                    } ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Sub-Total</td>
                                <td class="text-right"><?php echo $m ?> DT</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Total</strong></td>
                                <td class="text-right"><strong><?php echo $m ?> DT</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <button class="btn btn-block btn-light">Continue Shopping</button>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script src="src/bootstrap-input-spinner.js"> 
    </script> 
    <script> 
    $("input[type='number']").inputSpinner() 
    </script> 


</body>

</html> 