<?php
    if(isset($_POST['searchB'])){
        if(isset($_POST['search'])){
            $name = $_POST['search'];
            header("Location: buyPage.php?name=".$name);
    }
}
if(isset($_POST['searchAll'])){
    header("Location: buyPage.php");
}

?>