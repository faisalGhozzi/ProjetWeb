<?PHP

class Panier{
    private $product_id;
    private $qte;
    private $id_panier;
    private $product_img;
    private $product_second_img;

    function __construct($id_panier,$qte,$product_id, $product_img, $product_second_img){
        $this->product_id=$product_id;
        $this->id_panier=$id_panier;
        $this->qte=$qte;
        $this->product_img = $product_img;
        $this->product_second_img = $product_second_img;
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
    public function getProduct_img(){
        return $this->product_img;
    }
    public function getProduct_second_img(){
        return $this->product_second_img;
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
    function setProduct_second_img($product_second_img){
        $this->product_second_img = $product_second_img;
    }
    public function setProduct_img($product_img){
        $this->product_img = $product_img;
    }
  


    

    
    
}

?>