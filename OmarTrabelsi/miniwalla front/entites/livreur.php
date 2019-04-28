<?PHP
class livreur
{
	private $Nom_societe;
	private $Num_Tel;
	private $Adresse_mail;
	private $Adresse;
	private $Gouvernorat;
	function __construct($Nom_societe,$Num_Tel,$Adresse_mail,$Adresse,$Gouvernorat){
		$this->Nom_societe=$Nom_societe;
		$this->Num_Tel=$Num_Tel;
		$this->Adresse_mail=$Adresse_mail;
		$this->Adresse=$Adresse;
		$this->Gouvernorat=$Gouvernorat;
	}
	function getNom_societe(){
		return $this->Nom_societe;
	}
	function getNum_Tel(){
		return $this->Num_Tel;
	}
	function getAdresse_mail(){
		return $this->Adresse_mail;
	}
	function getAdresse(){
		return $this->Adresse;
	}
	function getGouvernorat(){
		return $this->Gouvernorat;
	}

	function setNom_societe($Nom_societe)
	{
		$this->Nom_societe=$Nom_societe;
	}
	function setNum_Tel($Num_Tel){
		$this->Num_Tel=$Num_Tel;
	}
	function setAdresse_mail($Adresse_mail){
		$this->Adresse_mail;
	}
	function setAdresse($Adresse){
		$this->Adresse=$Adresse;
	}
	function setGouvernorat($Gouvernorat){
		$this->Gouvernorat=$Gouvernorat;
	}
	
}
?>
