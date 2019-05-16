<?PHP
class Reclamation{

	private $email;
	private $subject;
	private $description;
	function __construct($email,$subject,$description){
		$this->email=$email;
		$this->subject=$subject;
		$this->description=$description;
	}
	

	function getEmail(){
		return $this->email;
	}
	function getSubject(){
		return $this->subject;
	}
	function getDescription(){
		return $this->description;
	}
	

	function setEmail($email){
		$this->email=$email;
	}
	function setSubject($subject){
		$this->subject=$subject;
	}
	function setDescription($description){
		$this->description=$description;
	}
	
}

?>