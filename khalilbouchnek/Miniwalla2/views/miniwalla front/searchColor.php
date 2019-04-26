<?php
include_once "C:/xampp/htdocs/Miniwalla/config.php";
$db = config::getConnexion();
$output = '';

if(isset($_POST['searchVal'])) {
    $searchq = $_POST['searchVal'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

    $sql = "SELECT * FROM elastic where elastic_name like '%$searchq%'";
    $count = mysql_num_rows($sql);
    if($count == 0){
        $output = 'No results';
    }else{
        while($row = mysql_fetch_array($sql)){
            $elstc_name = $row['elastic_name'];
            $elstc_img = $row['elastic_img'];
            $elstc_id = $row['elastic_id'];

            $output .= '<div>'.$elstic_name.'<div>';
        }
    }
}
echo ($output);

?>