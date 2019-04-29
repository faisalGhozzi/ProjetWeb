<?php
include "../config.php";


if(isset($_POST["query"]))
{
	$search = $_POST["query"];
	$sql="SELECT id,first_name,last_name,email,Gouvernorat,adress,Num_Tel,gender,status FROM clients where id='".$search."'
	OR first_name LIKE '%".$search."%'
	OR last_name LIKE '%".$search."%'
	OR email LIKE '%".$search."%'
	OR Gouvernorat LIKE '%".$search."%'
	OR adress LIKE '%".$search."%'
	OR Num_Tel LIKE '%".$search."%' 
	OR gender LIKE '%".$search."%'
	OR status LIKE '%".$search."%'";
	$db = config::getConnexion();	
	try{
		$results=$db->query($sql);
		while($row = $results->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr><td>'.$row['id'].'</td>'. 
    '<td>'.$row['first_name'].'</td>'. 
    '<td>'.$row['last_name'].'</td>'.
	'<td>'.$row['email'].'</td>'.
	'<td>'.$row['Gouvernorat'].'</td>'.
	'<td>'.$row['adress'].'</td>'.
	'<td>'.$row['Num_Tel'].'</td>'.
	'<td>'.$row['gender'].'</td>'.
	'<td>'.$row['status'].'</td>'.
	'</tr>';
    
} 
	}catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
}else{
	$sql="SELECT id,first_name,last_name,email,Gouvernorat,adress,Num_Tel,gender,status FROM clients";
	$db = config::getConnexion();	
	try{
		$results=$db->query($sql);
		while($row = $results->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr><td>'.$row['id'].'</td>'. 
    '<td>'.$row['first_name'].'</td>'. 
    '<td>'.$row['last_name'].'</td>'.
	'<td>'.$row['email'].'</td>'.
	'<td>'.$row['Gouvernorat'].'</td>'.
	'<td>'.$row['adress'].'</td>'.
	'<td>'.$row['Num_Tel'].'</td>'.
	'<td>'.$row['gender'].'</td>'.
	'<td>'.$row['status'].'</td>'.
	'</tr>';
    
} 
	}catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}




?>
