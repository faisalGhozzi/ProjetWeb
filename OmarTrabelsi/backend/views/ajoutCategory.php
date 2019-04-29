<?PHP
include_once "../entites/category.php";
include_once "../core/categoryC.php";
session_start();

if (isset($_POST['id']) and isset($_POST['nom'])){
$categoryTmp=new Category($_POST['nom']);

$categoryTmpC=new CategoryC();
$categoryTmpC->ajouterCategorie($categoryTmp);
header('Location: table.category.php');
	
}else{
	echo "vérifier les champs";
}


?>