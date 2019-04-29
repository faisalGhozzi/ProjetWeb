<?php
include_once "config.php";


session_start();
if (isset($_POST['submit'])) { 
	if (empty($_POST['email']) || empty($_POST['pass'])) { 
    echo "Username or Password is invalid"; 
	}else{
		$mail = $_POST['email']; 
		$password = $_POST['pass'];
		
			$sql="SELECT * From clients where email='$mail' and password='$password' LIMIT 1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

			foreach($liste as $client){}
				$_SESSION['user_id'] = $client['id'];
				header("location: index.php"); // Redirecting To Profile Page 
			
		
			
			

	}
}	
?>