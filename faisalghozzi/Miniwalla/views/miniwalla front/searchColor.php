<?php
include_once "C:/xampp/htdocs/Miniwalla/config.php";
$db = config::getConnexion();
$output = '';
$next = '';

if(isset($_POST['searchVal'])) {
    $searchq = $_POST['searchVal'];
    //$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    $sql = "SELECT * FROM elastic where elastic_name like '".$searchq."%'";
    try{
        $req=$db->query($sql);
        $req->execute();
        
        }catch(Exception $e){
            echo "Erreur :".$e->getMessage();
        }

    $count = $req->rowCount();
    
    if($count == 0){
        $output = 'No results';
    }else{
        foreach($req as $row){
            
            $elstc_id = $row['elastic_id'];
            $elstc_img = substr($row['elastic_img'],0,-4);

            $output .= '<input  type="radio" id="'.$elstc_img.'" class="color-color" name="color" value="'.$row['elastic_id'].'">';
            $next .= '<label  class="color-color" for="'.$elstc_img.'"><span></span></label>';
            
            echo ($output);
            echo($next);
        }
    }
}/*else {

    $sql = "SELECT * FROM elastic";
    try{
        $req=$db->query($sql);
        $req->execute();
        
        }catch(Exception $e){
            echo "Erreur :".$e->getMessage();
        }

    $count = $req->rowCount();
    
    if($count == 0){
        $output = 'No results';
    }else{
       foreach($req as $row){
            
            $elstc_id = $row['elastic_id'];
            $elstc_img = substr($row['elastic_img'],0,-4);

            $output .= '<input  type="radio" id="'.$elstc_img.'" class="color-color" name="color" value="'.$elstc_id.'">';
            $next .= '<label for="'.$elstc_img.'"><span></span></label>';
            echo ($output);
            echo($next);
        }
    }
}*/


?>