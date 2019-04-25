<?PHP
include_once "../../core/productC.php";
$productC=new ProductC();
if (isset($_POST["id"])){
	$productC->supprimerProduit($_POST["id"]);
	header('Location: table.product.php');
}

?>