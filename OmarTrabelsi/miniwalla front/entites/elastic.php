<?PHP

class Elastic{
    private $elastic_img;
    private $elastic_name;

    //constructeur

    function __construct($elastic_img,$elastic_name){
   
        $this->elastic_img=$elastic_img;
        $this->elastic_name=$elastic_name;
    }

    //Getters

 
    function getelastic_img(){
        return $this->elastic_img;
    }
    function getelastic_name(){
        return $this->elastic_name;
    }

    //Setters

    function setelastic_img($elastic_img){
        $this->elastic_img=$elastic_img;
    }
    function setelastic_name($elastic_name){
        $this->elastic_name=$elastic_name;
    }
}

?>