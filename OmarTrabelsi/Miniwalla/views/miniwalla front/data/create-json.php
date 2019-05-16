<?php

function get_data(){
    $connect = mysqli_connect("localhost", "root","","projet");
    $query = "SELECT * FROM elastic";
    $result = mysqli_query($connect,$query);
    $color_data = array();
    while($row = mysqli_fetch_array($result)){
        $color_data[] = array(
            'id' => $row["elastic_id"],
            'name' => $row["elastic_name"]
        );
    }

    return json_encode($color_data);
}

$file_name = 'colors.json';

if(file_put_contents($file_name, get_data())){
    
}

?>