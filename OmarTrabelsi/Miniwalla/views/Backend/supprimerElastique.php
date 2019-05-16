<?PHP

include_once "../../core/elasticC.php";
session_start();
if (!isset($_SESSION['user_id'])) {
   header('Location: login.php');
}
$elasticC=new ElasticC();
if (isset($_POST["id"])){
	$elasticC->supprimerElastique($_POST["id"]);
	header('Location: table.elastic.php');
}

?>