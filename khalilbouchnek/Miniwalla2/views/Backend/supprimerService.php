<?PHP
include "../../core/serviceC.php";
$serviceC=new ServiceC();
if (isset($_POST["id"])){
	$serviceC->supprimerService($_POST["id"]);
	header('Location: table.service.php');
}

?>