<?php
include_once "../../config.php";
$db = config::getConnexion();
if(isset($_POST["query"]) and isset($_GET["id"]))
{
    $ide = $_POST["query"];
    $idp = $_GET["id"];

    if($ide)
    {
        $sql="UPDATE product set elastic_id=$ide where product_id =$idp";
        try{
        $req=$db->query($sql);
        $req->execute();
        
        }catch(Exception $e){
            echo "Erreur :".$e->getMessage();
        }

        $sql="SELECT * from product inner join elastic on product.elastic_id = elastic.elastic_id where product_id=$idp";
        
        try{
            $resultat = $db->query($sql);
            
            while($row = $resultat->fetch(PDO::FETCH_ASSOC)){
                echo '<script language="javascript">$(".image1").attr("src","../Backend/image/'.$row["product_imgFace"].'");</script>';
                echo '<script language="javascript">$(".image2").attr("src","../Backend/image/'.$row["elastic_img"].'");</script>';
            }
            }catch(Exception $e){
                echo "Erreur :".$e->getMessage();
            }
    }
    if(!$ide){
        $sql="SELECT * from product inner join elastic on product.elastic_id = elastic.elastic_id where product_id=$idp";
        
        try{
            $resultat = $db->query($sql);
            
            while($row = $resultat->fetch(PDO::FETCH_ASSOC)){
                echo "<img src=\"../Backend/image/{$row['product_imgFace']}\" class=\"image1\">";
                echo "<img src=\"../Backend/image/{$row['elastic_img']}\" class=\"image2\" >";
            }
            }catch(Exception $e){
                echo "Erreur :".$e->getMessage();
            }
    }
    
   
}
?>