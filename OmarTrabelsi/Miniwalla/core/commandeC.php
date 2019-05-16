<?PHP
use PHPMailer\PHPMailer\Exception;

include_once "../../config.php";
class CommandeC {
	function afficherCommandes(){
		$sql="select * from commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}

	function ajouterCommande($commande){
		$sql="insert into commande (id_client,prix) values (:idc,:prix)";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);

			$id_client = $commande->getId_client();
			$prix = $commande->getPrix();

			$req->bindValue(':idc',$id_client);
			$req->bindValue(':prix',$prix);

			$req->execute();
		}catch(Exception $e){
			echo 'Erreur '.$e->getMessage();
		}

	}

	function recupererCommande($id){
		$sql="select * from commande where id=$id";
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