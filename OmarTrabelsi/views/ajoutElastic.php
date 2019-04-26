<?PHP
include_once "../entites/elastic.php";
include_once "../core/elasticC.php";

if (isset($_POST['id']) and isset($_POST['img']) and isset($_POST['name'])){
$elasticTmp=new Elastic($_POST['img'],$_POST['name']);

$elasticTmpC=new ElasticC();
$elasticTmpC->ajouterElastique($elasticTmp);
header('Location: table.elastic.php');
	
}else{
	echo "vérifier les champs";
}


?>