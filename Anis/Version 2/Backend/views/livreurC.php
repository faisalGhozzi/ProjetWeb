<?PHP
include "../config.php";
class livreurC
{
	function ajouterLivreur($livreur)
	{
		$sql="insert into livreur (Nom_societe,Num_Tel,Adresse_mail,Adresse,Gouvernorat) values (:Nom_societe,:Num_Tel,:Adresse_mail,:Adresse,:Gouvernorat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Nom_societe=$livreur->getNom_societe();
        $Num_Tel=$livreur->getNum_Tel();
        $Adresse_mail=$livreur->getAdresse_mail();
        $Adresse=$livreur->getAdresse();
        $Gouvernorat=$livreur->getGouvernorat();
		$req->bindValue(':Nom_societe',$Nom_societe);
		$req->bindValue(':Num_Tel',$Num_Tel);
		$req->bindValue(':Adresse_mail',$Adresse_mail);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Me5 Erreur: '.$e->getMessage();
        }
		
	}
	function modifier_livreur($livreur,$id)
	{
		$sql="UPDATE livreur SET Nom_societe=:Nom_societe, Num_Tel=:Num_Tel,Adresse_mail=:Adresse_mail,Adresse=:Adresse,Gouvernorat=:Gouvernorat WHERE id_livreur=$id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Nom_societe=$livreur->getNom_societe();
        $Num_Tel=$livreur->getNum_Tel();
        $Adresse_mail=$livreur->getAdresse_mail();
        $Adresse=$livreur->getAdresse();
        $Gouvernorat=$livreur->getGouvernorat();
		
		$req->bindValue(':Nom_societe',$Nom_societe);
		$req->bindValue(':Num_Tel',$Num_Tel);
		$req->bindValue(':Adresse_mail',$Adresse_mail);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
  
 
        }
		
	}
	function SupprimerLivreur($id)
	{
			$sql="DELETE from livreur WHERE id_livreur=$id";
		
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
	function AfficherLivreurs()
	{
				$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Me1 Erreur: '.$e->getMessage());
        }	
	}
		function Afficherlivreurs1()
	{
				$sql="SElECT * From livreur limit 1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Me2 Erreur: '.$e->getMessage());
        }	
	}
	function AfficherLivreur ($livreur)
	{
		echo "Nom de la société: ".$livreur->getNom_societe()."<br>";
		echo "Numéro du téléphone : ".$livreur->getNum_Tel()."<br>";
		echo "Adresse mail: ".$livreur->getAdresse_mail()."<br>";
		echo "Adresse: ".$livreur->getAdresse()."<br>";
		echo "Gouvernorat : ".$livreur->getGouvernorat()."<br>";
	}
	function rechercherliv($id)
	{
				$sql="SElECT * From livreur where id_livreur=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Me3 Erreur: '.$e->getMessage());
        }	
	}
	function getIDs()
	{
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Me4 Erreur: '.$e->getMessage());
        }	
	}
	function RechercherLivreur($Gouvernorat)
	{
						$sql="SELECT * From livreur where Gouvernorat='$Gouvernorat'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die(' ME Erreur: '.$e->getMessage());
        }	
	}
}
	
?>