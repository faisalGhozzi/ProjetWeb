<?PHP
class livraison
{
	private $Adresse_livraison;
	private $Num_Tel;
	private $id_panier;
	private $id_client;
	private $Gouvernorat;
	private $statut;
	function __construct($Adresse_livraison,$Num_Tel,$Gouvernorat,$id_client,$id_panier,$statut){
		$this->Adresse_livraison=$Adresse_livraison;
		$this->Num_Tel=$Num_Tel;
		$this->id_panier=$id_panier;
		$this->id_client=$id_client;
		$this->Gouvernorat=$Gouvernorat;
		$this->statut=$statut;
	}
	function getAdresse_livraison(){
		return $this->Adresse_livraison;
	}
	function getNum_Tel(){
		return $this->Num_Tel;
	}
	function getid_panier(){
		return $this->id_panier;
	}
	function getid_client(){
		return $this->id_client;
	}
	function getGouvernorat(){
		return $this->Gouvernorat;
	}
		function getStatut(){
		return $this->statut;
	}


	function setAdresse_livraison($Adresse_livraison)
	{
		$this->Adresse_livraison=$Adresse_livraison;
	}
	function setNum_Tel($Num_Tel){
		$this->Num_Tel=$Num_Tel;
	}
	function setid_panier($id_panier){
		$this->id_panier;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
	function setGouvernorat($Gouvernorat){
		$this->Gouvernorat=$Gouvernorat;
	}
	
}
?>
