<?php
include "../config.php";
session_start();


if(isset($_POST["query"]))
{
	$search = $_POST["query"];
	$sql="SELECT id,first_name,last_name,email,adress,gender,status FROM admins where id='".$search."'
	OR first_name LIKE '%".$search."%'
	OR last_name LIKE '%".$search."%'
	OR email LIKE '%".$search."%'
	OR adress LIKE '%".$search."%'
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
	'<td>'.$row['adress'].'</td>'.
	'<td>'.$row['gender'].'</td>'.
	'<td>'.$row['status'].'</td>'.
	'</tr>';
    
} 
	}catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	
}else{
	$sql="SELECT id,first_name,last_name,email,adress,gender,status FROM admins";
	$db = config::getConnexion();	
	try{
		$results=$db->query($sql);
		while($row = $results->fetch(PDO::FETCH_ASSOC))
{
	echo '<tr><td>'.$row['id'].'</td>'. 
    '<td>'.$row['first_name'].'</td>'. 
    '<td>'.$row['last_name'].'</td>'.
	'<td>'.$row['email'].'</td>'.
	'<td>'.$row['adress'].'</td>'.
	'<td>'.$row['gender'].'</td>'.
	'<td>'.$row['status'].'</td>'.
	'</tr>';
    
} 
	}catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
}




?>
