<?PHP
include "../../entites/service.php";
include "../../core/serviceC.php";
session_start();
if (!isset($_SESSION['user_id'])) {
	header('Location: login.php');
 }

if (isset($_POST['id']) and isset($_POST['type']) and isset($_POST['numero']))
{  
	$service1C=new ServiceC();
 
	$resultat = $service1C->afficheserviceparid($_POST['id']);

	$count = count($resultat);	
	if($count==0)
	{
		$service1=new service($_POST['id'],$_POST['type'],$_POST['numero']);
		//Partie2
		/*
		var_dump($employe1);
		}
		*/
		//Partie3
		$service1C->ajouterService($service1);
		header('Location: add-service.php');
			
	}
	else
	{
		header('location: add-service.php?message=Id already exists');
	}	
	}
	else
	{
		echo "vérifier les champs";
	}
//*/

?>