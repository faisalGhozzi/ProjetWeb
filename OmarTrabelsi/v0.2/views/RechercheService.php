<?php
include "../core/serviceC.php";
if(isset($_POST['submitSearch']))
{
if(isset($_POST['searchS']))
{
$id=$_POST['searchS'];
header("Location: table.service.php?id=$id");
}

}

if(isset($_POST['submitAll']))
{
    header("Location: table.service.php?");

}

?>