<?PHP
include "categoryC.php";
$categoryC=new CategoryC();
if (isset($_POST["id"])){
	$categoryC->supprimerCategorie($_POST["id"]);
	header('Location: table.category.php');
}

?>