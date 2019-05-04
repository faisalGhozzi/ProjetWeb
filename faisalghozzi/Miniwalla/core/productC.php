<?PHP
include_once "../../config.php";
class productC{

    function ajouterProduit($product){
        $sql="INSERT INTO PRODUCT (product_imgFace,product_imgTail,product_price,product_promotion,category_id,elastic_id) VALUES(:imgFace, :imgTail, :price, :promotion, :cid, :eid)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
            $imgFace=$product->getproduct_imgFace();
            $imgTail=$product->getproduct_imgTail();
            $price=$product->getproduct_price();
            $promotion=$product->getproduct_promotion();
            $cid=$product->getcategory_id();
            $eid=$product->getelastic_id();

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

    function afficherNomCategorie($idp){
        $sql="SELECT category_name from category inner join product on category.category_id = product.category_id where product.product_id=$idp";
        $db= config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreru : '.$e->getMessage());
        }
    }

    function afficherProduits(){
        $sql="SELECT PRODUCT.product_id, PRODUCT.product_imgFace, PRODUCT.product_imgTail, PRODUCT.product_price, PRODUCT.product_promotion, category.category_name, ELASTIC.elastic_img From Category Inner join product on category.category_id=Product.category_id inner join elastic on product.elastic_id=elastic.elastic_id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }

    function afficherProduitAvecElastic(){
        $sql="SELECT * FROM PRODUCT Inner join ELASTIC on PRODUCT.elastic_id=ELASTIC.elastic_id";
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

    function modifierProduit($product,$id){
        $sql="UPDATE PRODUCT SET product_imgFace=:imgFace, product_imgTail=:imgTail, product_price=:price, product_promotion=:promotion, category_id=:cid, elastic_id=:eid WHERE product_id=:id";
        $db = config::getConnexion();
        var_dump($id);
        try{
            $req=$db->prepare($sql);
            $imgFace=$product->getproduct_imgFace();
            $imgTail=$product->getproduct_imgTail();
            $price=$product->getproduct_price();
            $promotion=$product->getproduct_promotion();
            $cid=$product->getcategory_id();
            $eid=$product->getelastic_id();

            //$datas = array(':id'=>$id,':imgFace'=>$imgFace,':imgTail'=>$imgTail,':price'=>$price,':promotion'=>$promotion,':cid'=>$cid,':eid'=>$eid);

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
        }
    }

    function recupererProduits($id){
		$sql="SELECT * from PRODUCT where product_id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererProduitsAvecElastique($id){
		$sql="SELECT * from PRODUCT as pr inner join ELASTIC as el on pr.elastic_id=el.elastic_id where product_id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function changerElastique($id,$ide){
        $sql="UPDATE product set elastic_id=$ide where product_id=$id";
        $db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
?>