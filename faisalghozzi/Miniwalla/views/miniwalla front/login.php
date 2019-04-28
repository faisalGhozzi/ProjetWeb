<?php
include_once "../../config.php";

session_start();


if (isset($_POST['submit'])) { 
	var_dump($_POST);
	if (empty($_POST['email']) || empty($_POST['pass'])) { 
    echo "Username or Password is invalid"; 
	}else{
		$mail = $_POST['email']; 
		$password = $_POST['pass'];
		
			$sql="SELECT * From clients where email='$mail' and password='$password'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }

			foreach($liste as $client){
			
				$_SESSION['login'] = $client['id'];
				$_SESSION['name'] = $client['first_name']." ".$client['last_name'];
				
				
			
		//echo $client['id'];
			}
							header("location: index.php"); // Redirecting To Profile Page 


	}
}	
?>