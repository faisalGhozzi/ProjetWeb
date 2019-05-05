<?php
session_start() ; 
include_once "config.php";
include "core/Panier2C.php"; 
include "entites/Panier2.php"; 
if(isset($_POST['qte'])) 
{ 
    $qte=$_POST['qte'] ; 
    $id_pro= $_GET['id'] ; 

    $id_panier=0 ;
  

    $panier1=new Panier($id_panier,$qte,$id_pro) ; 
    $panier1C =new PanierC() ; 
    $panier1C->ajouterPanier($panier1); 
    header("Location: panier.php");

}

?>