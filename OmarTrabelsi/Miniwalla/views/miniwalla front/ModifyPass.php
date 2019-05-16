<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: index.php');
}
include "../../entites/client.php";
include "../../core/clientC.php";
$clientF = new ClientF();
unset($_SESSION['Mpass']);

if (isset($_POST['modifier'])) {
    if (isset($_POST['oldpass']) and isset($_POST['newpass'])) {
        $oldpass = md5($_POST['oldpass']);
        $connect = mysqli_connect("localhost", "root", "", "projet");
        $query = "select * from clients where password='$oldpass'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) == 1) {
            while ($row = mysqli_fetch_array($result)) {
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $mail = $row['email'];
                $adress = $row['adress'];
                $gender = $row['gender'];
                $status = $row['status'];
                $password = md5($_POST['newpass']);

                $tel = $row['Num_Tel'];
                $gov = $row['Gouvernorat'];

                $client = new Client($first_name, $last_name, $password, $mail, $gov, $adress, $tel, $gender, $status);

                $clientF->modifierClient($client, $_SESSION['login']);
                $_SESSION['Mpass'] = "Password Successfully Changed";
                //header('Location: ModifiyPass.php');
            }
        } else {
            $_SESSION['Mpass'] = "Verify Your Password";
            //header('Location: ModifiyPass.php');
        }
    } else {
        $_SESSION['Mpass'] = "Please fill all the fields";
        //header('Location: ModifiyPass.php');
    }
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/otherPages.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Poiret+One|Quicksand:300,400,500,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>miniWalla | Change Password</title>
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
                        <?PHP if (isset($_SESSION['login'])) {   ?>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?>'s Settings </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="Profile.php">Profile</a>
                                        <a class="dropdown-item" href="ModifyPass.php">Change Password</a>
                                        <a class="dropdown-item" href="Livraison.php">Delivery</a>
                                        <a class="dropdown-item" href="secret message.php">Order</a>
                                        <a class="dropdown-item" href="signout.php">Sign out</a>
                                    </div>
                                </div>
                            </li>
                        <?PHP } ?>
                        <?PHP if (!isset($_SESSION['login'])) {   ?>
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
                        <li class="nav-item"><a href="Phonecase.html">Phone Case</a></li>
                        <li class="nav-item"><a href="contact.php">Contact</a></li>
                        <li class="nav-item"><a href="about.html">About Us</a></li>
                        <li class="nav-item"><a href="panier.php">Panier<i class="fas fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <footer>
        <p>miniWalla &copy; 2019 website created By WeCode Team</p>
    </footer>

    <!--Modal Section-->
    <!--SignIn-->
    <div id="bg-modal">
        <section class="container-fluid">
            <section class="row justify-content-center">
                <section class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <form method="POST" action="login.php" id="zoom-in-effect" class="form-container">
                        <div id="close" onclick="closePopUp()">+</div>
                        <div class="form-group">
                            <img class="logofull" src="images/logo-full.png">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                            <a href="#" class="normal"><small id="passwordHelp">Forgot password?</small></a>
                        </div>
                        <div id="error">

                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Stay connected</label>
                        </div>
                        <button type="submit" name="submit" value="submit" class="btn btn-primary btn-block submit-btn">Submit</button>

                        <hr>
                        <a class="btn btn-primary btn-block new-btn" href="singup.html">Create new account</a>

                    </form>
                </section>
            </section>
        </section>
    </div>

    <div id="bg-modal-2">
        <!-- Changer toute Page Content par -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <form name="f" method="POST" action="ModifyPass.php">
                        <div class="form-group">
                            <center><label>Current Password</label></center>
                            <input type="password" class="form-control" name="oldpass" id="oldpass">
                        </div>
                        <div class="form-group">
                            <center><label>New Password</label></center>
                            <input type="password" class="form-control" name="newpass" id="newpass">
                        </div>
                        <button style="z-index: auto;" type="submit" class="btn btn-success btn-block center-block" value="Modify" name="modifier">
                            <i class="fa fa-check"></i>
                            Save
                        </button>
                        <button style="z-index: auto;" type="submit" class="btn btn-danger btn-block center-block">
                            <i class="fa fa-times"></i>
                            Cancel
                        </button>
                        <?php if (isset($_SESSION['Mpass'])) { ?>
                            <center><p><?php echo $_SESSION['Mpass']; ?></p></center>
                        <?php } ?>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- Changer toute Page Content par -->
    </div>

</body>

</html>