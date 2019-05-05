<?php
include_once "../../core/productC.php";
include_once "../../core/elasticC.php";

session_start();


$product1C = new ProductC();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $prod = $product1C->recupererProduitsAvecElastique($id);
}


$elastic1C = new ElasticC();
$listeElastique = $elastic1C->afficherElastiques();




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
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/otherPages.css">
    <link rel="stylesheet" href="css/buy-page.css">
    <link rel="stylesheet" href="css/canvas-trick.css">
    <link rel="stylesheet" type="text/css" href="css/color-change.php">
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Poiret+One|Quicksand:300,400,500,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lalezar|Rakkas" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title>miniWalla | Buy Page</title>
</head>

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
                        <?php if (isset($_SESSION['login'])) : ?>
                            <li class="nav-item">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name'];?>'s Settings   </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                  <a class="dropdown-item" href="Profile.php">Profile</a>
                                        <a class="dropdown-item" href="ModifyPass.php">Change Password</a>
                                <a class="dropdown-item" href="ethnic.php">Order</a>
                                <a class="dropdown-item" href="secret message.php">Delivery</a>
                                <a class="dropdown-item" href="signout.php">Sign out</a>
                            </div>
                        </div>
                    </li>
                        <?php endif ?>
                        <?php if (!isset($_SESSION['login'])) : ?>
                            <li class="nav-item"><a href="#" id="pop-up-button" onclick="popUp()">Sign in</a></li>
                        <?php endif ?> <li class="nav-item">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="wallets.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wallets </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="standard.php">Standard</a>
                                    <a class="dropdown-item" href="ethnic.php">Ethnic</a>
                                    <a class="dropdown-item" href="secret message.php">Secret message</a>
                                    <a class="dropdown-item" href="carbon.php">Carbon</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item"><a href="Phonecase.php">Phone Case</a></li>
                        <li class="nav-item"><a href="contact.php">Contact</a></li>
                        <li class="nav-item"><a href="about.php">About Us</a></li>
                        <li class="nav-item"><a href="panier.php">Panier<i class="fas fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="left-column">
        <img data-image="pink" class="active" src="images/pink.png" alt="">
    </div>
    <div id="bg-modal">
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <form id="zoom-in-effect" class="form-container" method="POST" action="login.php">
                        <div id="close" onclick="closePopUp()">+</div>
                        <div class="form-group">
                            <img class="logofull" src="images/logo-full.png">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                            <a href="#" class="normal"><small id="passwordHelp">Forgot password?</small></a>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Stay connected</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block submit-btn">Submit</button>
                        <hr>
                        <a class="btn btn-primary btn-block new-btn" href="signup.html">Create new account</a>
                    </form>
                </section>
            </section>
        </section>
    </div>
    <div class="container">
        <div class="right-column">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                    <!-- Product Goes Here-->
                    <div class="container">
                        <div class="card">
                            <?php foreach ($prod as $row) {
                                echo "<img src=\"../Backend/image/{$row['product_imgFace']}\" class=\"image1 img\">";
                                echo "<img src=\"../Backend/image/{$row['elastic_img']}\" class=\"image2 img\" >";
                            } ?>
                            <canvas id="gameCanvas" width="320" height="480"></canvas>
                        </div>
                    </div>
                    <div class="card" id="result">

                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 tools">
                    <!-- Search and modifications Goes Here-->
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Search Color</span>
                                </div>
                                <input type="text" name="search" id="search" class="form-control" placeholder="Search for color" aria-label="Color" aria-describedby="addon-wrapping" onkeyup="">
                            </div>
                            <!-- Search suggestions with json -->
                            <!--<div id="match-list"></div>-->
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-12">
                            <div id="output" class="color-choose">

                            </div>
                        </div>
                        <div class="col-12">
                            <br>
                            <!--<div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping">Select Color</span>
                            </div>-->
                            <div class="product-color">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="addon-wrapping">Select Color</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 color-choose">
                            <?php foreach ($listeElastique as $rowE) : ?>
                                <div>
                                    <input type="radio" id="<?php echo substr($rowE['elastic_img'], 0, -4); ?>" class="color-color" name="color" value="<?php echo $rowE['elastic_id']; ?>">
                                    <label for="<?php echo substr($rowE['elastic_img'], 0, -4); ?>"><span></span></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-12">
                            <div>
                                <a href="#collapseExample" class="btn btn-primary btn-lg btn-block" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Make your Walla unique
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="spacer">
                                    <br>
                                    <center>
                                        <div class="col-6">
                                            <label><span class="input-group-text" id="addon-wrapping">Write Something</span></label>
                                            <input type="text" id="your-words" onkeyup="inputText()">
                                        </div>
                                        <br>
                                        <div class="col-12">
                                            <input id="b" type="button" value="Save Example As"/>
                                        </div>
                                        <div class="col-12">
                                            <label><span class="input-group-text" id="addon-wrapping">Or send an image</span></label>
                                            <img src="" style="display:none;" height="200" id="image">
                                            <center><input class="btn btn-success btn-lg btn-block" type="file" name="img" onchange="showImage.call(this)"></center>
                                                         <script>
                                                               function showImage()
                                                               {
                                                                  if(this.files && this.files[0])
                                                                  {
                                                                     var obj = new FileReader();
                                                                     obj.onload = function(data){
                                                                           var image = document.getElementById("image");
                                                                           image.src = data.target.result;
                                                                           image.style.display = "block";
                                                                     }
                                                                     obj.readAsDataURL(this.files[0]);
                                                                  }
                                                               }
                                                         </script> 
                                        </div>
                                    </center>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class="col-12 buy-button">
                            <div>
                                <?php if (isset($_SESSION['login'])) : ?>
                                    <form method="POST" action="AjouterPanier.php?id=<?php echo $_GET['id']; ?>">
                                        <input hidden type="number" name="qte" value="1">
                                        <button class="btn btn-success btn-lg btn-block" type="submit" name="ajouter" value="ajouter">Buy me</button>
                                    </form>
                                <?php endif ?>
                                <?php if (!isset($_SESSION['login'])) : ?>
                                    <button class="btn btn-success btn-lg btn-block" name="ajouter" value="ajouter" onclick="popUp()">Buy me</button>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="javaScript/change-elastic.js"></script>
    <script src="javaScript/live-search.js"></script>
    <script src="javaScript/search-suggest.js"></script>
    <script src="javaScript/canvas-toBlob.js"></script>
    <script src="javaScript/fabric.min.js"></script>
    <script src="javaScript/FileSaver.js"></script>
    <script type="text/javaScript">
        /*window.onload = function (){
        var canvas = new fabric.Canvas('gameCanvas');
        // adding text in canvas
        fabric.image.fromURL('eth2Face.png',function(img){
            img.setWidth(200);
            img.setWidth(200);
            canvas.add(img);
        })
        fabric.image.fromURL('brightPink.png',function(img2){
            img2.setWidth(200);
            img2.setWidth(200);
            canvas.add(img2);
        })
        }*/

        function inputText(){
            var canvas = document.getElementById("gameCanvas");
            var ctx = canvas.getContext("2d");
            ctx.clearRect(0,0,canvas.width,canvas.height);
            var font = "Aref Ruqaa";
            var pixels = "50px";
            var txt = document.getElementById("your-words").value;
            var color = "#c19a6b";
            
            ctx.font = pixels+" "+font;
            ctx.fillStyle = color;
            ctx.textAlign = "center";
            ctx.fillText(txt, canvas.width/2,50);

        }

        $("#b").click(function(){
            $("#gameCanvas").get(0).toBlob(function(blob){
                saveAs(blob, "img.png");
            });
        })
    </script>
</body>

</html>