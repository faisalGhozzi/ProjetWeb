<?PHP
include "../config.php";
class adminF{
	
	function ajouterClient($client)
	{
		$sql="insert into admins (first_name,last_name,password,email,adress,gender,status) values (:first_name, :last_name, :password, :mail, :adress , :gender , :status)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $first_name=$client->getfirst_name();
        $last_name=$client->getlast_name();
		$password=$client->getpassword();
		$mail=$client->getmail();
		$adress=$client->getadress();
		$gender=$client->getgender();
		$status="Inactive";
	
		
		$req->bindValue(':first_name',$first_name);
		$req->bindValue(':last_name',$last_name);
		$req->bindValue(':password',$password);
		$req->bindValue(':mail',$mail);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':gender',$gender);
		$req->bindValue(':status',$status);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }	
	}
	
	function afficherClients()
	{
		$sql="SElECT * From admins";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}
	
	function modifierClient($client,$id)
	{

		$sql="UPDATE admins SET first_name=:first_name, last_name=:last_name, password=:password, email=:email, adress=:adress, gender=:gender, status=:status WHERE id=:id";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $req=$db->prepare($sql);
		
		$first_name=$client->getfirst_name();
        $last_name=$client->getlast_name();
		$password=$client->getpassword();
		$email=$client->getmail();
		$adress=$client->getadress();
		$gender=$client->getgender();
		$status=$client->getstatus();
	
		$req->bindValue(':id',$id);
		$req->bindValue(':first_name',$first_name);
		$req->bindValue(':last_name',$last_name);
		$req->bindValue(':password',$password);
		$req->bindValue(':email',$email);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':gender',$gender);
		$req->bindValue(':status',$status);
		try{		
            $req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
			var_dump($e); 
        }
	}
	
	
	function rechercherClient($id)
	{
		$sql="SElECT * From admins where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerClient($id)
	{
			$sql="DELETE FROM admins where id=$id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{
		$req->execute();
		header('Location: AfficherClients.php');
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>