<HTML>
<head>
</head>
<body>
<?PHP
include "../entites/service.php";
include "../core/serviceC.php";


	$service=new Service($_POST['id'],$_POST['type'],$_POST['numero']);
	$serviceC = new ServiceC();
	$serviceC->modifierService($service,$_POST['id_ini']);
	
	header('Location: table.service.php');
?>
</body>
</HTMl>