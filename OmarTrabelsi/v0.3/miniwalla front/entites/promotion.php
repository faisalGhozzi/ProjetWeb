<?PHP
class Promotion{

	private $idProduit;
	private $idCategorie;
	private $tauxPromo;

	function __construct($idProduit,$idCategorie,$tauxPromo){
		$this->idProduit=$idProduit;
		$this->idCategorie=$idCategorie;
		$this->tauxPromo=$tauxPromo;
		
	}
	
	//Getters
	function getidProduit(){
		return $this->idProduit;
	}
	function getidCategorie(){
		return $this->idCategorie;
	}
	function gettauxPromo(){
		return $this->tauxPromo;
	}
	//Getters
	
	//Setters
	function setidProduit($idProduit){
		$this->idProduit=$idProduit;
	}
	function setidCategorie($idCategorie){
		$this->idCategorie=$idCategorie;
	}
	function settauxPromo($tauxPromo){
		$this->tauxPromo=$tauxPromo;
	}
	//Setters
	
}

?>