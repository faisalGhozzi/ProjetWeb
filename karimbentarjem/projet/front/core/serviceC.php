<?PHP
include_once "../config.php";
class ServiceC 
{
function afficherService ($service){
		echo "Id: ".$service->getservice_id()."<br>";
		echo "Type: ".$service->getservice_type()."<br>";
		echo "Numero: ".$service->getservice_numero()."<br>";
	
	}
	
	function ajouterService($service){
		$sql="INSERT INTO serviceclient (service_id,service_type,service_numero) VALUES (:id, :typee,:numero)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$service->getservice_id();
        $typee=$service->getservice_type();
        $numero=$service->getservice_numero();
		$req->bindValue(':id',$id);
		$req->bindValue(':typee',$typee);
		$req->bindValue(':numero',$numero);
	
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherServices(){
		$sql="SELECT * From serviceclient";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerService($id){
		$sql="DELETE FROM serviceclient where service_id= :id";
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
	function modifierService($service,$id){
		$sql="UPDATE serviceclient SET service_id=:id, service_type=:typee,service_numero=:numero WHERE service_id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$service->getservice_id();
        $typee=$service->getservice_type();
        $numero=$service->getservice_numero();
		$datas = array(':id'=>$id, ':typee'=>$typee,':numero'=>$numero);
		$req->bindValue(':id',$id);
		$req->bindValue(':typee',$typee);
		$req->bindValue(':numero',$numero);

		
            $s=$req->execute();
			
       }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererService($id){
		$sql="SELECT * from serviceclient where service_id='".$id."' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	


function afficheserviceparid($id)
{
	$req="SELECT service_id,service_type,service_numero from serviceclient where service_id= '".$id."'";
	$db = config::getConnexion();
	try{
	$liste=$db->query($req);
	return $liste->fetchAll();
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}	  
	
}

}

?>