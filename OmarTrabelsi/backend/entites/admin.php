<?PHP
class admin{

	private $first_name;
	private $last_name;
	private $password;
	private $mail;
	private $adress;
	private $gender;
	private $status;

	function __construct($first_name,$last_name,$password,$mail,$adress,$gender,$status){
		$this->first_name=$first_name;
		$this->last_name=$last_name;
		$this->password=$password;
		$this->mail=$mail;
		$this->adress=$adress;
		$this->gender=$gender;
		$this->status=$status;
		
	}
	
	//Getters
	function getfirst_name(){
		return $this->first_name;
	}
	function getlast_name(){
		return $this->last_name;
	}
	function getpassword(){
		return $this->password;
	}
	
	function getmail(){
		return $this->mail;
	}
	
	function getadress(){
		return $this->adress;
	}
	
	function getgender(){
		return $this->gender;
	}
	
	function getstatus(){
		return $this->status;
	}
	
	//Getters
	
	//Setters
	function setfirst_name($first_name){
		$this->first_name=$first_name;
	}
	function setlast_name($last_name){
		$this->last_name;
	}
	function setpassword($password){
		$this->password=$password;
	}
	
	
	function setmail($mail){
		$this->mail=$mail;
	}
	
	function setadress($adress){
		$this->adress=$adress;
	}

	function setgender($gender){
		$this->gender=$gender;
	}
	
		function setstatus($status){
		$this->status=$status;
	}
	//Setters
	
}

?>