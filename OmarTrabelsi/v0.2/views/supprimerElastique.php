<?PHP
include_once "../core/elasticC.php";
$elasticC=new ElasticC();
if (isset($_POST["id"])){
	$elasticC->supprimerElastique($_POST["id"]);
	header('Location: table.elastic.php');
}

?>