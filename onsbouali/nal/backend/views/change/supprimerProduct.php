<?PHP
include_once "../core/productC.php";
$ProductC=new productC();
if (isset($_POST["id"])){
	$ProductC->supprimerProduit($_POST["id"]);
	header('Location: table.product.php');
}

?>