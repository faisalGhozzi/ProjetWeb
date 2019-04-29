<?PHP
class Service{
	private $service_id;
	private $service_type;
	private $service_numero;

	function __construct($service_id,$service_type,$service_numero){
		$this->service_id=$service_id;
		$this->service_type=$service_type;
		$this->service_numero=$service_numero;
		
	}
	
	function getservice_id(){
		return $this->service_id;
	}
	function getservice_type(){
		return $this->service_type;
	}
	function getservice_numero(){
		return $this->service_numero;
	}
	
	function setservice_id($service_id){
		$this->service_id=$service_id;
	}
	function setservice_type($service_type){
		$this->service_type;
	}
	function setservice_numero($service_numero){
		$this->service_numero=$service_numero;
	}
}

?>