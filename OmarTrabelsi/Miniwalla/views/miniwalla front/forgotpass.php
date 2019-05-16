<?php
use  PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/PHPMailer.php';
 require 'PHPMailer/SMTP.php';
session_start();


if(isset($_POST['submit']))
{
	$conn= mysqli_connect("localhost", "root", "") or die(mysqli_error()); // Connect to database server(localhost) with username and password.
		mysqli_select_db($conn,"projet") or die(mysqli_error()); // Select registrations database.
		
	$email = $_POST['email'];
		
		
	$search = mysqli_query($conn,"SELECT * from clients where email='$email'") or die(mysqli_error($conn)); 
$match  = mysqli_num_rows($search);


if($match > 0){
	while($row=mysqli_fetch_array($search))
{
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
}
$password = rand(999, 99999);
$password_hash = md5($password);
$output='<p>Please use the following password to connect to your account.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Email :'.$email.'</p>';		
$output.='<p>New password :'.$password.'</p>';		
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please change the password as soon as you connect to your account,
If you did not request this forgotten password email, no action 
is needed, your password will not be reset. However, you may want to log into 
your account and change your security password as someone may have guessed it.</p>';   	
$output.='<p>Thanks</p>';
mysqli_query($conn,"UPDATE clients set password='$password_hash' where email='$email'") or die(mysqli_error($conn));
                  $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                  try {
                      //Server settings
                      $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                      $mail->isSMTP();                                      // Set mailer to use SMTP
                      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                      $mail->SMTPAuth = true;                               // Enable SMTP authentication
                      $mail->Username = 'omar.trabelsi.1@esprit.tn';                 // SMTP username
                      $mail->Password = 'tlzghnxynkzangso';                           // SMTP password
                      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                      $mail->Port = 465;                                    // TCP port to connect to
                  
                      //Recipients
                      $mail->setFrom('Recovery@miniwalla.tn', 'Miniwalla');
                      $mail->addAddress($email, $first_name." ".$last_name);     // Add a recipient
                      
                      
                      //Content
                      $mail->isHTML(true);                                  // Set email format to HTML
                      $mail->Subject = 'Miniwalla Password Recovery';
                      $mail->Body=$output;
                      $mail->send();
                  } catch (Exception $e) {
                      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                  }
	
}
}














?>