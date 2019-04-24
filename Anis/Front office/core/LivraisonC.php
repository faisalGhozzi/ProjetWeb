<?PHP

class LivraisonC{
	
	function AjouterLivraison($livraison)
	{
		$sql="insert into livraison (Adresse_livraison,Num_Tel,Gouvernorat,id_client,id_panier) values (:Adresse_livraison,:Num_Tel,:Gouvernorat,null,null)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Adresse_livraison=$livraison->getAdresse_livraison();
        $Num_Tel=$livraison->getNum_Tel();
        $Gouvernorat=$livraison->getGouvernorat();
		$req->bindValue(':Adresse_livraison',$Adresse_livraison);
		$req->bindValue(':Num_Tel',$Num_Tel);
		$req->bindValue(':Gouvernorat',$Gouvernorat);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	
}


?>