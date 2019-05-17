<?PHP
include "../../config.php";
class CouponC{
	
	
	function ajouterCoupon($Coupon)
	{
			$sql="insert into codepromo (code,reduction,date_Debut,date_Fin) values (:code,:reduction,:dateDebut,:dateFin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $code=$Coupon->getcode();
			 $reduction=$Coupon->getreduction();
			 $dateDebut=$Coupon->getdateDebut();
			 $dateFin=$Coupon->getdateFin();
		
		
		$req->bindValue(':code',$code);
		$req->bindValue(':reduction',$reduction);
		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherCoupons(){
		
		$sql="SELECT * From codepromo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function rechercherCoupon($idp)
	{
		$sql="SElECT * From codepromo where id=$idp";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function modifierCoupon($Coupon,$idp)
	{
		$sql="UPDATE codepromo SET code=:code,reduction=:reduction,date_Debut=:dateDebut,date_Fin=:dateFin WHERE id=:idp";
		$db = config::getConnexion();
		try{		
		
		
        $req=$db->prepare($sql);
		
			 $code=$Coupon->getcode();
			 $reduction=$Coupon->getreduction();
			 $dateDebut=$Coupon->getdateDebut();
			 $dateFin=$Coupon->getdateFin();
		
		
		$req->bindValue(':code',$code);
		$req->bindValue(':reduction',$reduction);
		$req->bindValue(':dateDebut',$dateDebut);
		$req->bindValue(':dateFin',$dateFin);
		$req->bindValue(':idp',$idp);
		
            $req->execute();
			        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
	}
	
	function supprimerCoupon($id)
	{
			$sql="DELETE FROM codepromo where id=$id";
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