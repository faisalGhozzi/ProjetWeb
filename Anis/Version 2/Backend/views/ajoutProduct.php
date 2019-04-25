<?PHP
include "product.php";
include "productC.php";

if (isset($_POST['id']) and isset($_POST['imgFace']) and isset($_POST['imgTail']) and isset($_POST['price']) and isset($_POST['promotion']) and isset($_POST['cid']) and isset($_POST['eid'])){
	$productTmp=new Product($_POST['id'],$_POST['imgFace'],$_POST['imgTail'],$_POST['price'],$_POST['promotion'],$_POST['cid'],$_POST['eid']);
	
	$productTmpC=new ProductC();
	$productTmpC->ajouterProduit($productTmp);
	header('Location: add-product.html');
		
	}else{
		echo "vérifier les champs";
	}
	
	
	?>