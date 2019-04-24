 <html>
<head>
<title>PHP User Registration Form</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table">
<?php if(isset($message)) { ?>
<div class="message <?php echo $type; ?>"><?php echo $message; ?></div>
<?php } ?>
<tr>
<td width="28%">Username</td>
<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
<tr>
<td></td>
<td><input type="checkbox" name="terms"> I accept Terms and Conditions</td>
</tr>
</table>
<div>
<input type="submit" name="submit" value="Register" class="btnRegister">
</div>
</form>
</body></html>
 <?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'PHPMailer/Exception.php';
 require 'PHPMailer/PHPMailer.php';
 require 'PHPMailer/SMTP.php';
 include 'settings.php';
 if ($_POST) {
     //want to send form, so check for required fields
     if (($_POST['subject'] == "") || ($_POST['message'] == "")) {
         header("Location: mail.php");
          exit;
     }

     //connect to database
   doDB();

    if (mysqli_connect_errno()) {
       //if connection fails, stop script execution
         printf("Connect failed: %s\n", mysqli_connect_error());
          exit();
     } else {
          //otherwise, get emails from subscribers list
          $sql = "SELECT email FROM subscribers";
         $result = mysqli_query($mysqli, $sql)
                   or die(mysqli_error($mysqli));

          //loop through results and send mail
       while ($row = mysqli_fetch_array($result)) {
              set_time_limit(0);
             $email = $row['email'];
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
                      $mail->setFrom('Newsletter@miniwalla.tn', 'Miniwalla Newsletter');
                      $mail->addAddress($email, 'User');     // Add a recipient
                      
                      
                      //Content
                      $mail->isHTML(true);                                  // Set email format to HTML
                      $mail->Subject = 'Account Activation';
                      $mail->Body    = stripslashes($_POST['message']);
                      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                  
                      $mail->send();
                  } catch (Exception $e) {
                      echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                  }
              $display_block = "newsletter sent to: ".mysqli_num_rows($result)." Users<br/>";
         }
          mysqli_free_result($result);
          mysqli_close($mysqli);
     }
 }
 ?>
