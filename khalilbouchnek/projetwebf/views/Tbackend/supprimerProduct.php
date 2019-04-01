<?PHP
include "../../core/productC.php";
$productC=new ProductC();
if (isset($_POST["id"])){
	$serviceC->supprimerProduit($_POST["id"]);
	header('Location: table.product.php');
}

?>