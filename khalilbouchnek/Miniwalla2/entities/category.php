<?PHP

class Category{
	private $category_id;
	private $category_name;

	// constructeur
	
	function __construct($category_id,$category_name){
		$this->category_id=$category_id;
		$this->category_name=$category_name;
	}
	
	// Getters

	function getcategory_id(){
		return $this->category_id;
	}
	function getcategory_name(){
		return $this->category_name;
	}

	// Setters

	function setcategory_id($category_id){
		$this->category_id;
	}
	function setcategory_name($category_name){
		$this->category_name;
	}
}

?>