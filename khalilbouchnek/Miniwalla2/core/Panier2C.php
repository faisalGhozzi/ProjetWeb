<?PHP
include_once "../../config.php";
include_once "../../entities/Panier2.php"; 

class PanierC{

    function ajouterPanier($Panier){
        $sql="INSERT INTO panier (id_panier,qte,product_id) VALUES(:id_panier, :qte, :id_pro)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id_panier=$Panier->getid_panier();
            $qte=$Panier->getqte();
            $id_pro=$Panier->getproduct_id();
          

            $req->bindValue(':id_panier',$id_panier);
            $req->bindValue(':qte',$qte);
            $req->bindValue(':id_pro',$id_pro);
         
            $req->execute();
        }catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    } 

    function afficherPanier(){
        $sql1="SELECT * FROM panier WHERE id_panier=1"; 
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql1);
            return $liste;
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        } 

    }

    function recupererDonneesProduit($id){
        $sql1="SELECT * FROM product inner join elastic on product.elastic_id = elastic.elastic_id WHERE product_id=$id"; 
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql1);
            return $liste;
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        } 
        
    } 

    function MontontTotal() 
    {
        $sql2="SELECT SUM(PRODUCT.product_price*panier.qte) 
        product_price FROM PRODUCT right join panier on PRODUCT.product_id=panier.product_id where id_panier=1";  
           $db = config::getConnexion();
           try{
               $liste2=$db->query($sql2); 
                $l=$liste2->fetch(0); 

               return $l[0];
           }catch(Exception $e){
               die('Erreur : '.$e->getMessage());
           } 

    } 
    function supprimerPanier($id){
		$sql="DELETE FROM panier where product_id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function modifierPanier($panier,$id){
		$sql="UPDATE panier SET qte=:qte WHERE product_id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$qte=$panier->getqte();
        $req->bindValue(':qte',$qte);
        $req->bindValue(':id',$id);

		
            $s=$req->execute();
			
       }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}




}
?>