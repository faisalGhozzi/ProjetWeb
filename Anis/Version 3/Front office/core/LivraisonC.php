<?PHP
include "../config.php";
class LivraisonC{
	
	function AjouterLivraison($livraison)
	{
		$sql="insert into livraison (Adresse_livraison,Num_Tel,Gouvernorat,id_client,id_panier,statut) values (:Adresse_livraison,:Num_Tel,:Gouvernorat,null,null,'en cours de verification')";
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
	function getIDs()
	{	
		$sql="Select * from livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
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
	
}


?>