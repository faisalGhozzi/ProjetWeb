<?PHP
class Commande{
			
	private $id_client;	
	private $prix;
	function __construct($id_client,$prix){

		$this->id_client=$id_client;
		$this->prix=$prix;
	}

	function getId_client(){
		return $this->id_client;
	}
	function getPrix(){
		return $this->prix;
	}
	
	function setId_client($id_client){
		$this->id_client=$id_client;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
}

?>