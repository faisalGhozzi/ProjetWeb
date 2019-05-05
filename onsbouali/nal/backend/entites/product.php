<?PHP

class Product{
   
    private $product_imgFace;
    private $product_imgTail;
    private $product_price;
    private $product_promotion;
    private $category_id;
    private $elastic_id;

    //constructor

    function __construct($product_imgFace,$product_imgTail,$product_price,$product_promotion,$category_id,$elastic_id){
      
        $this->product_imgFace=$product_imgFace;
        $this->product_imgTail=$product_imgTail;
        $this->product_price=$product_price;
        $this->product_promotion=$product_promotion;
        $this->category_id=$category_id;
        $this->elastic_id=$elastic_id;
    }

    //Getters

   
    function getproduct_imgFace(){
        return $this->product_imgFace;
    }
    function getproduct_imgTail(){
        return $this->product_imgTail;
    }
    function getproduct_price(){
        return $this->product_price;
    }
    function getproduct_promotion(){
        return $this->product_promotion;
    }
    function getcategory_id(){
        return $this->category_id;
    }
    function getelastic_id(){
        return $this->elastic_id;
    }

    //Setters

    
    function setproduct_imgFace($product_imgFace){
        $this->product_imgFace=$product_imgFace;
    }
    function setproduct_imgTail($product_imgTail){
        $this->product_imgTail=$product_imgTail;
    }
    function setproduct_price($product_price){
        $this->product_price=$product_price;
    }
    function setproduct_promotion($product_promotion){
        $this->product_promotion=$product_promotion;
    }
    function setcategory_id($category_id){
        $this->category_id=$category_id;
    }
    function setelastic_id($elastic_id){
        $this->elastic_id=$elastic_id;
    }
}

?>