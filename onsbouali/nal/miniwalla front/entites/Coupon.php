<?PHP
class Coupon{

	private $code;
	private $reduction;
	private $dateDebut;
	private $dateFin;

	function __construct($code,$reduction,$dateDebut,$dateFin){
		
		$this->code=$code;
		$this->reduction=$reduction;
		$this->dateDebut=$dateDebut;
		$this->dateFin=$dateFin;
	}
	
	//Getters
	function getcode(){
		return $this->code;
	}
	
	function getreduction(){
		return $this->reduction;
	}
	function getdateDebut(){
		return $this->dateDebut;
	}
	function getdateFin(){
		return $this->dateFin;
	}
	//Getters
	
	//Setters
	function setcode($code){
		$this->code=$code;
	}
	function setreduction($reduction){
		$this->reduction=$reduction;
	}
	function setdateDebut($dateDebut){
		$this->dateDebut=$dateDebut;
	}
	function setdateFin($dateFin){
		$this->dateFin=$dateFin;
	}
	//Setters
	
}

?>