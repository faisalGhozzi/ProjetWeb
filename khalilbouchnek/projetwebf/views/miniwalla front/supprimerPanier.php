<?PHP
include "../../core/Panier2C.php";
$panierC=new PanierC();
if (isset($_POST["id"])){
	$panierC->supprimerPanier($_POST["id"]);
	header('Location: panier.php');
}

?>