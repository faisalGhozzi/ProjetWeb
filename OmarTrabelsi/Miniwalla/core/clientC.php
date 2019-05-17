<?PHP
include "../../config.php";
class ClientF{
	
	function ajouterClient($client)
	{
		$sql="insert into clients (first_name,last_name,password,email,Gouvernorat,adress,Num_Tel,gender,status) values (:first_name, :last_name, :password, :mail, :Gouvernorat , :adress ,:Num_Tel , :gender , :status)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $first_name=$client->getfirst_name();
        $last_name=$client->getlast_name();
		$password=$client->getpassword();
		$mail=$client->getmail();
		$Gouvernorat=$client->getGouvernorat();
		$adress=$client->getadress();
		$Num_Tel=$client->getNum_Tel();
		$gender=$client->getgender();
		$status="Inactive";
	
		
		$req->bindValue(':first_name',$first_name);
		$req->bindValue(':last_name',$last_name);
		$req->bindValue(':password',md5($password));
		$req->bindValue(':mail',$mail);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':Num_Tel',$Num_Tel);
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
		$sql="SElECT * From clients";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	

	}
	
	function modifierClientNoPass($client,$id)
	{

		$sql="UPDATE clients SET first_name=:first_name, last_name=:last_name, email=:email, Gouvernorat=:Gouvernorat, adress=:adress, Num_Tel=:Num_Tel, gender=:gender WHERE id=:id";
		$db = config::getConnexion();  
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $req=$db->prepare($sql);
		
		$first_name=$client->getfirst_name();
        $last_name=$client->getlast_name();
		$email=$client->getmail();
		$Gouvernorat=$client->getGouvernorat();
		$adress=$client->getadress();
		$Num_Tel=$client->getNum_Tel();
		$gender=$client->getgender();
	
		$req->bindValue(':id',$id);
		$req->bindValue(':first_name',$first_name);
		$req->bindValue(':last_name',$last_name);
		$req->bindValue(':email',$email);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':Num_Tel',$Num_Tel);
		$req->bindValue(':gender',$gender);
		try{		
            $req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
			var_dump($e); 
        }
	}

	function modifierClient($client,$id)
	{

		$sql="UPDATE clients SET first_name=:first_name, last_name=:last_name, password=:password, email=:email, Gouvernorat=:Gouvernorat, adress=:adress, Num_Tel=:Num_Tel, gender=:gender, status=:status WHERE id=:id";
		$db = config::getConnexion();  
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $req=$db->prepare($sql);
		
		$first_name=$client->getfirst_name();
        $last_name=$client->getlast_name();
		$password=$client->getpassword();
		$email=$client->getmail();
		$Gouvernorat=$client->getGouvernorat();
		$adress=$client->getadress();
		$Num_Tel=$client->getNum_Tel();
		$gender=$client->getgender();
		$status=$client->getstatus();
	
		$req->bindValue(':id',$id);
		$req->bindValue(':first_name',$first_name);
		$req->bindValue(':last_name',$last_name);
		$req->bindValue(':password',$password);
		$req->bindValue(':email',$email);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':Num_Tel',$Num_Tel);
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
		$sql="SElECT * From clients where id=$id";
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
			$sql="DELETE FROM clients where id=$id";
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
	
	function rechercherClientPN($numero)
	{
		$sql="SElECT * From clients where Num_Tel=$numero";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function modifierClientLiv($idc,$adress,$numT,$gov)
	{
		var_dump($idc,$adress,$numT,$gov);
		$sql="UPDATE clients SET Gouvernorat=:Gouvernorat,adress=:adress, Num_Tel=:Num_Tel  WHERE id=:idc";
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $req=$db->prepare($sql);
		
	
	
		$req->bindValue(':idc',$idc);
		$req->bindValue(':adress',$adress);
		$req->bindValue(':Num_Tel',$numT);
		$req->bindValue(':Gouvernorat',$gov);

		try{		
            $req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
	}
}

?>