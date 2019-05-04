<?PHP
include "../../core/commandeC.php";
$employe1C=new CommandeC();
$listeEmployes=$employe1C->afficherEmployes();
session_start();
if (!isset($_SESSION['user_id'])) {
	header('Location: login.php');
 }
?>
<table border="1">
<tr>
<td>Reference</td>
<td>Nom</td>
<td>Mail</td>
<td>Telephone</td>
<td>Date</td>
<td>Adresse</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['reference']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['telephone']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['reference']; ?>" name="reference">
	</form>
	</td>
	<td><a href="modifierEmploye.php?reference=<?PHP echo $row['reference']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


