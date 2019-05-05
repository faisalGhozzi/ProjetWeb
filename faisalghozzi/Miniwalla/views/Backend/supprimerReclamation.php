<?PHP
include "../../core/reclamationR.php";
session_start();
if (!isset($_SESSION['user_id'])) {
   header('Location: login.php');
}
$reclamationR=new ReclamationR();
if (isset($_POST["id_client"])){
	$reclamationR->supprimerReclamation($_POST["id_client"]);
	header('Location: reclamation.php');
}

?>