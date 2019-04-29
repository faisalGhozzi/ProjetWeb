<?php
session_start();
	include "entites/client.php";
	include "core/clientC.php";
	 $clientF = new ClientF();
unset($_SESSION['Mpass']);

if(isset($_POST['modifier']))
{
	if(isset($_POST['oldpass']) and isset($_POST['newpass']))
	{
	 $oldpass = $_POST['oldpass'];
	 $connect = mysqli_connect("localhost", "root", "", "projet");  
	 $query = "select * from clients where password='$oldpass'"; 
	 $result = mysqli_query($connect, $query); 
	 if(mysqli_num_rows($result)==1)
	{	
		while($row = mysqli_fetch_array($result)){
		$first_name=$row['first_name'];
	 $last_name=$row['last_name'];
	 $mail=$row['email'];
	 $adress=$row['adress'];
	 $gender=$row['gender'];
	 $status=$row['status'];
	 $password=$_POST['newpass'];
	 
	 $tel=$row['Num_Tel'];
	 $gov=$row['Gouvernorat'];
	 
	 $client = new Client($first_name,$last_name,$password,$mail,$gov,$adress,$tel,$gender,$status);
	 
	 $clientF->modifierClient($client,$_SESSION['user_id']);
	 $_SESSION['Mpass']="Password Successfully Changed";
	 //header('Location: ModifiyPass.php');
	 }
	}else
	{
		$_SESSION['Mpass']="Verify your Old Password";
		//header('Location: ModifiyPass.php');
	}
	 
	}else{
		$_SESSION['Mpass']="Please fill all the fields";
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
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700|Poiret+One|Quicksand:300,400,500,700|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>miniWalla | Home</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img id="logo" src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                     <?PHP if(isset($_SESSION['user_id'])){   ?>
					<li class="nav-item"><a href="signout.php" id="pop-up-button" >Sign out</a></li>
					<?PHP } ?>
					<?PHP if(!isset($_SESSION['user_id'])){   ?>
					<li class="nav-item"><a href="#" id="pop-up-button" onclick="popUp()">Sign in</a></li>
					<?PHP } ?>
					<li class="nav-item">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="Client.php" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User Management   </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="Profile.php">Profile</a>
                                <a class="dropdown-item" href="ModifiyPass.php">Modifiy Password</a>
                                
                            </div>
                        </div>
                    </li>
					
					
                    <li class="nav-item">
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="wallets.html" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wallets   </a>
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
                    <li class="nav-item"><a href="about.html" >About Us</a></li>
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
                                    <a class="btn btn-primary btn-block new-btn" href="singup.html" >Create new account</a>
									
                                </form>
                            </section>
                        </section>
                </section>
    </div>
	
	 <div class="container mb-10 ">
					 <!-- Changer toute Page Content par --> 
					<div class="row">
                     <div class="col-md-12">
                        <div class="page-box">
                           <div class="row">
                              <div class="col-md-6 col-sm-6">
                                 <div class="add-product-form-group">
                                    <h3></h3>
									
                                    <form name="f" method="POST" action="ModifiyPass.php" >
									
									
                                       
                                          <div class="col-md-12">
                                             <p>
                                                <label>Current Password :</label>
                                                <input type="password"   class="form-control" name="oldpass" id="oldpass">
                                             </p>
                                          </div>
                                     
                                       
                                          <div class="col-md-12">
                                             <p>
                                                <label>New Password :</label>
                                                <input type="password"  class="form-control"  name="newpass" id="newpass">
                                             </p>
                                          </div>
									    
                                          <div class="col-md-12">
                                             <p>
											 <div>
                                                
												 
                                                <button style="z-index: auto;" type="submit" class="btn btn-success btn-md center-block" value="Modifiy" name="modifier">
                                                <i class="fa fa-check"></i>
                                                Save
                                                </button>
                                                <button style="z-index: auto;" type="submit" class="btn btn-danger btn-md center-block" >
                                                <i class="fa fa-times"></i>
                                                Cancel
                                                </button>
												<?php if(isset($_SESSION['Mpass'])) { ?>
												<p><?php echo $_SESSION['Mpass']; ?></p>
												<?php }?>
												</div>
                                             
                                             </p>
											 
                                          </div>
                                       
                                       
                                          
                                       
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