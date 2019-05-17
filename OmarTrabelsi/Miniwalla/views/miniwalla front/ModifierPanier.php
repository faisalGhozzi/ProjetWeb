<?PHP
include "../../core/Panier2C.php"; 
$panierC=new PanierC();

var_dump($_POST);
if (isset($_POST['modifier'])){
    
    $panier=new Panier($_POST['id_panier'],$_POST['qte'],$_POST['product_id']);
	$panierC->modifierPanier($panier,$_POST['product_id']);
    header('Location: panier.php'); 
} 
if (isset($_POST["supprimer"])){
	$panierC->supprimerProduit($_POST["product_id"]);
    header('Location: panier.php');	

}


    ?>