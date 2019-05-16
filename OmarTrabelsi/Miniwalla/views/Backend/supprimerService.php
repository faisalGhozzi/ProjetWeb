<?PHP
include "../../core/serviceC.php";
session_start();
if (!isset($_SESSION['user_id'])) {
   header('Location: login.php');
}
$serviceC=new ServiceC();
if (isset($_POST["id"])){
	$serviceC->supprimerService($_POST["id"]);
	header('Location: table.service.php');
}

?>