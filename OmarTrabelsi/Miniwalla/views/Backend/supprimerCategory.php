<?PHP
include_once "../../core/categoryC.php";
session_start();
if (!isset($_SESSION['user_id'])) {
   header('Location: login.php');
}
$categoryC=new CategoryC();
if (isset($_POST["id"])){
	$categoryC->supprimerCategorie($_POST["id"]);
	header('Location: table.category.php');
}

?>