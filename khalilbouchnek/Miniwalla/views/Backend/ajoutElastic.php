<?PHP
include_once "../../entities/elastic.php";
include_once "../../core/elasticC.php";

if (isset($_POST['id']) and isset($_POST['img']) and isset($_POST['name'])){
$elasticTmp=new Elastic($_POST['id'],$_POST['img'],$_POST['name']);

$elasticTmpC=new ElasticC();
$elasticTmpC->ajouterElastique($elasticTmp);
header('Location: add-elastic.html');
	
}else{
	echo "vérifier les champs";
}


?>