<?PHP
include_once "config.php";

class LivraisonC{
	
	function AjouterLivraison($livraison)
	{
		$sql="insert into livraison (Adresse_livraison,Num_Tel,Gouvernorat,id_client,id_panier) values (:Adresse_livraison,:Num_Tel,:Gouvernorat,null,null)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Adresse_livraison=$livraison->getAdresse_livraison();
        $Num_Tel=$livraison->getNum_Tel();
        $Gouvernorat=$livraison->getGouvernorat();
		$req->bindValue(':Adresse_livraison',$Adresse_livraison);
		$req->bindValue(':Num_Tel',$Num_Tel);
		$req->bindValue(':Gouvernorat',$Gouvernorat);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function ModifierLivraison($livraison,$reference)
	{
				$sql="UPDATE livraison SET Adresse_livraison=:Adresse_livraison, Num_Tel=:Num_Tel,Gouvernorat=:Gouvernorat WHERE reference=$reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Adresse_livraison=$livraison->getAdresse_livraison();
        $Num_Tel=$livraison->getNum_Tel();
        $Gouvernorat=$livraison->getGouvernorat();
		
		$req->bindValue(':Adresse_livraison',$Adresse_livraison);
		$req->bindValue(':Num_Tel',$Num_Tel);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
 
        }
	}
		
		function RechercherLivraison($id)
	{
						$sql="SElECT * From livraison where id_client=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
		function getIDs()
	{
		$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Me4 Erreur: '.$e->getMessage());
        }	
	}
		function SupprimerLivraison($reference)
	{
			$sql="DELETE from livraison WHERE reference=$reference";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        

		
		$req=$db->prepare($sql);
        $req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
 
        }
	}
function AfficherLivraison()
	{
				$sql="SElECT * From livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Me1 Erreur: '.$e->getMessage());
        }	
	}	
	
}
	


?>