<?php

$headers= 'From: karim.bentarjem.1@esprit.tn'. "\r\n".
		  'MIME-Version: 1.0'. "\r\n".
		  'Content-Type: text/html; charset=utf-8'; 

$result = mail("karim.bentarjem.1@esprit.tn","MiniWalla reclamation", "<h1>Cher client votre reclamation est bien recue.</h1>. <h3>Vous recevrez une reponse dans le mail suivant.</h3>",$headers);

var_dump($result);


?>