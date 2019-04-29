<?PHP
include_once "config.php";
class CategoryC {

	function afficherCategorie($category){
		echo "ID Categorie: ".$category->getcategory_id()."<br>";
		echo "Nom Categorie: ".$category->getcategory_name()."<br>";
	}

	function ajouterCategorie($category){
		$sql="INSERT INTO `category` (`category_name`) VALUES (:nom)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$category->getcategory_name();
		$req->bindValue(':nom',$nom);

		$req->execute();           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherCategories(){
		$sql="SELECT * From CATEGORY";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerCategorie($id){
		$sql="DELETE FROM CATEGORY where category_id= :id";
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
	function modifierCategorie($category,$id){
		$sql="UPDATE CATEGORY SET category_name=:nom WHERE category_id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
		$req=$db->prepare($sql);
        $nom=$category->getcategory_name();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		
		
        $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($id){
		$sql="SELECT * from CATEGORY where category_id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategories($nom){
		$sql="SELECT * from CATEGORY where category_name=$nom";
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