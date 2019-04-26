<?PHP
include "../../core/Panier2C.php"; 
$panierC=new PanierC();

if (isset($_POST['modifier'])){
    $panier=new Panier($_POST['id_panier'],$_POST['qte'],$_POST['id_produit']);
	$panierC->modifierPanier($panier,$_POST['id_produit']);
    header('Location: panier.php'); 
} 

    ?>