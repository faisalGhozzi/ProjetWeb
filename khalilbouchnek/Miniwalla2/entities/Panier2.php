<?PHP

class Panier{
    private $product_id;
    private $qte;
    private $id_panier;

   

    //constructor

    function __construct($id_panier,$qte,$product_id){
        $this->product_id=$product_id;
        $this->id_panier=$id_panier;
        $this->qte=$qte;
       
    }

    //Getters

    function getproduct_id(){
        return $this->product_id;
    }
    function getid_panier(){
        return $this->id_panier;
    }
    function getqte(){
        return $this->qte;
    }
    //Setters

    function setproduct_id($product_id){
        $this->product_id=$product_id;
    }
    function setid_panier($id_panier){
        $this->id_panier=$id_panier;
    }
    function setqte($qte){
        $this->qte=$qte;
    }
  
}

?>