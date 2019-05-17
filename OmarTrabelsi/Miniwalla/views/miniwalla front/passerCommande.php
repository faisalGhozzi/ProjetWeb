<?php
session_start();
include "../../core/commandeC.php";
include "../../core/Panier2C.php";
include "../../entites/commande.php";
		


$panier1C = new PanierC();

$commandeC = new CommandeC();
$connect = mysqli_connect("localhost", "root", "", "projet");
                                          
if(isset($_SESSION['login']) and isset($_SESSION['total']))
{

    $id=$_SESSION['login'];
    $total=$_SESSION['total'];
    $commande = new Commande($id,$total);
    $Com=$commandeC->ajouterCommande($commande);
    $panier1C->supprimerPanier($_SESSION['login']);
    header('Location: Livraison.php');

}










?>