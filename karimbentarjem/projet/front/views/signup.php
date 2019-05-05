

<?php
include('login2.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location:  acceuil.php"); // Redirecting To Profile Page
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/connexion.js"></script>
 <script src="js/vsignup.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="javaScript/popUpSignup.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="javaScript/verifFormulaireInscription.js"></script>
    <link rel="stylesheet" href="css/signup.css">   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Poiret+One|Quicksand:300,400,500,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">    <title>Miniwalla | Sign in</title>
</head>
<body>
<div id="bg-modal" id="login">
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-6 col-lg-4">
                <form  method="post" name="myForm" class="form-container">
                    <div class="form-group">
                        <a href="acceuil.html"><img class="logofull" src="images/logo-full.png"></a>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Username</label>
                        <input  type="text" name="username" class="form-control"  placeholder="Enter name"  >
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input  type="password" name="password" class="form-control"  placeholder="Password"  >
                    </div>
                    
                    
                    <input name="submit" type="submit" value="login" class="btn btn-primary btn-block" onclick="test()">
               
                </form>
            </section>
        </section>
    </section>
</div>

</body>
</html>