<?PHP
include "config.php";
class productC{

    function ajouterProduit($product){
        $sql="INSERT INTO PRODUCT (product_id,product_imgFace,product_imgTail,product_price,product_promotion,category_id,elastic_id) VALUES(:id, :imgFace, :imgTail, :price, :promotion, :cid, :eid)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id=$product->getproduct_id();
            $imgFace=$product->getproduct_imgFace();
            $imgTail=$product->getproduct_imgTail();
            $price=$product->getproduct_price();
            $promotion=$product->getproduct_promotion();
            $cid=$product->getcategory_id();
            $eid=$product->getelastic_id();

            $req->bindValue(':id',$id);
            $req->bindValue(':imgFace',$imgFace);
            $req->bindValue(':imgTail',$imgTail);
            $req->bindValue(':price',$price);
            $req->bindValue(':promotion',$promotion);
            $req->bindValue(':cid',$cid);
            $req->bindValue(':eid',$eid);

            $req->execute();
        }catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherProduits(){
        $sql="SELECT * From PRODUCT";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }

    function supprimerProduit($id){
        $sql="DELETE FROM PRODUCT where product_id=:id";
        $db=config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierProduit($produit,$id){
        $sql="UPDATE PRODUCT SET product_id=:id, product_imgFace=:imgFace, product_imgTail=:imgTail, product_price=:price, product_promotion=:promotion, category_id=:cid, elastic_id=:eid WHERE product_id=:id";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $id=$product->getproduct_id();
            $imgFace=$product->getproduct_imgFace();
            $imgTail=$product->getproduct_imgTail();
            $price=$product->getproduct_price();
            $promotion=$product->getproduct_promotion();
            $cid=$product->getcategory_id();
            $eid=$product->getelastic_id();

            $datas = array(':id'=>$id,':imgFace'=>$imgFace,':imgTail'=>$imgTail,':price'=>$price,':promotion'=>$promotion,':cid'=>$cid,':eid'=>$eid);

            $req->bindValue(':id',$id);
            $req->bindValue(':imgFace',$imgFace);
            $req->bindValue(':imgTail',$imgTail);
            $req->bindValue(':price',$price);
            $req->bindValue(':promotion',$promotion);
            $req->bindValue(':cid',$cid);
            $req->bindValue(':eid',$eid);

            $req->execute();
        }catch(Exception $e){
            echo "Erreur: ".$e->getMessage();
            echo "Les Datas : " ;
            print_r($datas);
        }
    }
}
?>