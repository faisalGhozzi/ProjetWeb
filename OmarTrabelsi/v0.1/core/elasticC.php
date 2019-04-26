<?PHP
include "../config.php";
class ElasticC{

    function ajouterElastique($elastic){
        $sql="INSERT INTO ELASTIC (elastic_id,elastic_img,elastic_name) VALUES (:id, :img, :nom)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id=$elastic->getelastic_id();
            $img=$elastic->getelastic_img();
            $nom=$elastic->getelastic_name();
            $req->bindValue(':id',$id);
            $req->bindValue(':img',$img);
            $req->bindValue(':nom',$nom);

            $req->execute();
        }catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherElastiques(){
        $sql="SELECT * From ELASTIC";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerElastique($id){
        $sql="DELETE FROM ELASTIC where elastic_id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierElastique($elastic,$id){
        $sql="UPDATE ELASTIC SET elastic_id=:id, elastic_img=:img, elastic_name=:nom WHERE elastic_id=:id";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);
            $id=$elastic->getelastic_id();
            $img=$elastic->getelastic_img();
            $nom=$elastic->getelastic_name();
            $datas = array(':id'=>$id,':img'=>$img, ':nom'=>$nom);
            $req->bindValue(':id',$id);
            $req->bindValue(':img',$img);
            $req->bindValue(':nom',$nom);

            $s=$req->execute();
        }catch(Exception $e){
            echo "Erreur : ".$e->getMessage();
            echo "Les Datas : " ;
            print_r($datas);
        }
    } 
    function recupererElastiques($id){
		$sql="SELECT * from ELASTIC where elastic_id=$id";
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