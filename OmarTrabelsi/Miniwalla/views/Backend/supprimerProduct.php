<?PHP
include_once "../../core/productC.php";
session_start();
if (!isset($_SESSION['user_id'])) {
   header('Location: login.php');
}
$ProductC=new productC();
if (isset($_POST["id"])){
	$ProductC->supprimerProduit($_POST["id"]);
	header('Location: table.product.php');
}

?>