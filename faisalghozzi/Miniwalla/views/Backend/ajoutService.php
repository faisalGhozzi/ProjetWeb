<?PHP
include_once "../../entities/service.php";
include_once "../../core/serviceC.php";

if (isset($_POST['id']) and isset($_POST['type']) and isset($_POST['numero'])){
$service1=new service($_POST['id'],$_POST['type'],$_POST['numero']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$service1C=new ServiceC();
$service1C->ajouterService($service1);
header('Location: add-service.html');
	
}else{
	echo "vérifier les champs";
}
//*/

?>