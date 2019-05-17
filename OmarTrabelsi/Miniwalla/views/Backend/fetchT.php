<?PHP
include "../../config.php";

if(isset($_POST["query"]))
{
	
	$id = $_POST["query"];
$sql="SElECT * From livraison where reference=$id";
		$db = config::getConnexion();
		try{
		$statut=$db->query($sql);
		}
        catch (Exception $e){
            die('Me1 Erreur: '.$e->getMessage());
        }

foreach($statut as $row)
{}		
if ($row['statut']=="En cours de verification")	
{
	echo '<script language="javascript">
	$("#statut").val("En cours de verification");';
}	
if ($row['statut']=="En cours de preparation")	
{
		echo '<script language="javascript">
	$("#statut").val("En cours de preparation");';
}	
if ($row['statut']=="En route")		
{
	echo '<script language="javascript">
	$("#statut").val("En route");';
}
if ($row['statut']=="Livre")	
{
	echo '<script language="javascript">
	$("#statut").val("Livre");';
}	
		
		
}
?>
