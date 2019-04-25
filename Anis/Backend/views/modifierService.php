<HTML>
<head>
</head>
<body>
<?PHP
include "service.php";
include "serviceC.php";
if (isset($_GET['id'])){
	$serviceC=new ServiceC();
    $result=$serviceC->recupererService($_GET['id']);
	foreach($result as $row){
		$id=$row['service_id'];
		$typee=$row['service_type'];
		$numero=$row['service_numero'];
?>
<form method="POST">
<table>
<caption>Modifier Service</caption>
<tr>
<td>CIN</td>
<td><input type="text" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="type" value="<?PHP echo $typee ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="numero" value="<?PHP echo $numero ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$service=new service($_POST['id'],$_POST['type'],$_POST['numero']);
	$serviceC->modifierService($service,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: liste-service.php');
}
?>
</body>
</HTMl>