<?PHP
include "../../core/commandeC.php";
$employeC=new CommandeC();
session_start();
if (!isset($_SESSION['user_id'])) {
   header('Location: login.php');
}

if (isset($_POST["reference"])){
	$employeC->supprimerEmploye($_POST["reference"]);
	header('Location: commandeB.php');
}

?>