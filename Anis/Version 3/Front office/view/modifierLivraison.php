<?php

		/*<?PHP
	$name=$competitionC->getnom();
	foreach ($name as $id)
	{
	?>*/
include'../entites/client.php';
include'../core/clientC.php';

$clientC= new ClientC();
$resultat=$clientC->rechercherClientPN($_POST['num1']);
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