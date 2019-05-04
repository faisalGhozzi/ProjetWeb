<?PHP
include "../entites/elastic.php";
include "../core/elasticC.php";
session_start();


$elastic=new Elastic($_POST['img'],$_POST['name']);
$elasticC= new ElasticC();
$elasticC->modifierElastique($elastic,$_POST['id_ini']);
header('Location: table.elastic.php');
	
	
?>