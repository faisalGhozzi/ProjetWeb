<?PHP
include "../../entites/elastic.php";
include "../../core/elasticC.php";
session_start();

if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
 }


$elastic=new Elastic($_POST['img'],$_POST['name']);
$elasticC= new ElasticC();
$elasticC->modifierElastique($elastic,$_POST['id_ini']);
header('Location: table.elastic.php');
	
	
?>