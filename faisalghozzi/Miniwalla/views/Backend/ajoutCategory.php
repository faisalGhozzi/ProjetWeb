<?PHP
include_once "../../entities/category.php";
include_once "../../core/categoryC.php";

if (isset($_POST['id']) and isset($_POST['nom'])){
$categoryTmp=new Category($_POST['id'],$_POST['nom']);

$categoryTmpC=new CategoryC();
$categoryTmpC->ajouterCategorie($categoryTmp);
header('Location: add-category.html');
	
}else{
	echo "vérifier les champs";
}


?>