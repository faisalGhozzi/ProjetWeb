<?php


include'client.php';
include'clientC.php';

$clientC= new ClientC();
$resultat=$clientC->rechercherClientPN($_POST['numT']);
foreach($resultat as $row)
{
	$id=$row['id'];
	
	break;
}


$int = (int)$id;
$resultat=$clientC->modifierClientLiv($int,$_POST['adress'],$_POST['numT'],$_POST['gov']);



header('Location: Livraison.php');

/* END IF */



?>