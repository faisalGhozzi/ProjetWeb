<?PHP
include "../config.php";
class PromotionF{
		
	function ajouterPromotionProduit($promotion){
		$sql="insert into promotion (idProduit,idCategorie,tauxPromo) values (:idProduit, NULL, :tauxPromo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idProduit=$promotion->getidProduit();
        $tauxPromo=$promotion->gettauxPromo();
		
		
		$req->bindValue(':idProduit',$idProduit);
		$req->bindValue(':tauxPromo',$tauxPromo);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function ajouterPromotionCategorie($promotion){
		$sql="insert into promotion (idProduit,idCategorie,tauxPromo) values (NULL, :idCategorie, :tauxPromo)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idCategorie=$promotion->getidCategorie();
        $tauxPromo=$promotion->gettauxPromo();
		
		
		$req->bindValue(':idCategorie',$idCategorie);
		$req->bindValue(':tauxPromo',$tauxPromo);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherPromotion ($promotion){
		echo "Identifiant Produit: ".$promotion->getidProduit()."<br>";
		echo "Identifiant Categorie : ".$promotion->getidCategorie()."<br>";
		echo "Taux Du PromotionF : ".$promotion->gettauxPromo()."<br>";
	}
	
	function afficherPromotions(){
		
		$sql="SELECT * From promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherIDP(){
		
		$sql="SELECT * From product";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherIDC(){
		
		$sql="SELECT * From category";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function rechercherPromo($idp)
	{
		$sql="SElECT * From promotion where id=$idp";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	
	function modifierPromotion($promotion,$idp)
	{
		$sql="UPDATE promotion SET idProduit=:idP, idCategorie=:idCat, tauxPromo=:tauxPromo WHERE id=:idp";
		$db = config::getConnexion();
		try{		
		
		
        $req=$db->prepare($sql);
		
		$idpr=$promotion->getidProduit();
        $idCat=$promotion->getidCategorie();
        $tauxPromo=$promotion->gettauxPromo();
		
		print_r($idpr);
		print_r($idCat);
       
		$req->bindValue(':idP',$idpr);
		$req->bindValue(':idCat',$idCat);
		$req->bindValue(':tauxPromo',$tauxPromo);
		$req->bindValue(':idp',$idp);
		
            $req->execute();
			        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
	}
	
	function returnid()
	{
		$sql="SELECT * from promotion LIMIT 1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromotion($id)
	{
			$sql="DELETE FROM promotion where id=$id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		try{
		$req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>