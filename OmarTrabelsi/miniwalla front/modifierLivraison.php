<?php
include'entites/Livraisons.php';
include'core/LivraisonC.php';

include'entites/client.php';
include'core/clientC.php';

$livraisonC = new livraisonC();
$clientC= new ClientC();
/* if ISSET adress,numT,gov*/
/* declaraction des variables $adress $numT $gov */
$resultat=$ClientC->rechercherClientPN($_POST['numT']);
$id="";
foreach($resultat as $row)
{
	$id=$row['id'];
	break;
}

$resultat=$ClientC->modifierClient($id,$adress,$numT,$gov);
header("Location: lien de la page livraison");
/* END IF */



?>