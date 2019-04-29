<?PHP

class Category{
	
	private $category_name;

	// constructeur
	
	function __construct($category_name){
		
		$this->category_name=$category_name;
	}
	
	// Getters

	
	function getcategory_name(){
		return $this->category_name;
	}

	// Setters

	
	function setcategory_name($category_name){
		$this->category_name;
	}
}

?>