<?php
		
use  PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/PHPMailer.php';
 require 'PHPMailer/SMTP.php';
		

	if(isset($_POST['add']))
	{
		$conn= mysqli_connect("localhost", "root", "") or die(mysqli_error()); // Connect to database server(localhost) with username and password.
		mysqli_select_db($conn,"projet") or die(mysqli_error()); // Select registrations database.
		
	$search = mysqli_query($conn,"SELECT email, status FROM clients WHERE email='".$_POST['email']."' AND status='Inactive'") or die(mysqli_error($conn)); 
$match  = mysqli_num_rows($search);
if($match > 0){
	?>
	<script language="javascript">
		alert("Account exist allready, try with a different email .");
		window.location='signup.html';
		</script>
		
	<?php

}else{
	

	if(isset($_POST['firstName']) and isset($_POST['gov']) and isset($_POST['Num_Tel']) and isset($_POST['lastName']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['adress']) and isset($_POST['gender']))
	{
	
	 
	 $first_name=mysqli_escape_string($conn,$_POST['firstName']);
	 $last_name=mysqli_escape_string($conn,$_POST['lastName']);
	 $password=mysqli_escape_string($conn,$_POST['password']);
	 $mail=mysqli_escape_string($conn,$_POST['email']);
	 $tel=mysqli_escape_string($conn,$_POST['Num_Tel']);
	 $gender=mysqli_escape_string($conn,$_POST['gender']);
	 $gov=mysqli_escape_string($conn,$_POST['gov']);
	 $adress=mysqli_escape_string($conn,$_POST['adress']);
	 $status="Inactive";
		mysqli_query($conn,"insert into clients (first_name,last_name,password,email,Gouvernorat,adress,Num_Tel,gender,status) values('".$first_name."','".$last_name."','".md5($password)."','".$mail."','".$gov."','".$adress."','".$tel."','".$gender."','".$status."')") or die(mysqli_error($conn));
		
		?>
		<script language="javascript">
		alert("Your account has been made, please verify it by clicking the activation link that has been send to your email.");
		</script>
			
		<?php
		$email = $mail;
                  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                  try {
                      //Server settings
                      $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                      $mail->isSMTP();                                      // Set mailer to use SMTP
                      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                      $mail->SMTPAuth = true;                               // Enable SMTP authentication
                      $mail->Username = 'omar.trabelsi.1@esprit.tn';                 // SMTP username
                      $mail->Password = 'gkkcgoimpwxiwhdg';                           // SMTP password
                      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                      $mail->Port = 465;                                    // TCP port to connect to
                  
                      //Recipients
                      $mail->setFrom('Activation@miniwalla.tn', 'Miniwalla');
                      $mail->addAddress($email, $first_name." ".$last_name);     // Add a recipient
                      
                      
                      //Content
                      $mail->isHTML(true);                                  // Set email format to HTML
                      $mail->Subject = 'Miniwalla Signup | Account Activation';
                      $mail->Body    = '
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
------------------------
Username:'.$email.'
Password: The one you used at signup
------------------------
Please click this link to activate your account:
http://127.0.0.1/old/miniwalla%20front/verify.php?email='.$email.'
';
                      $mail->send();
                  } catch (Exception $e) {
                      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                  }
		
			 

		 
	
	}else
	{
		echo "verifier les champs";
	}
	}
}	
		?>