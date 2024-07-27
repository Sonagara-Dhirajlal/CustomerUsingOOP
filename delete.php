<?php

$id = $_GET['id'];


$connection = mysqli_connect('localhost','root','','me');
$query = "DELETE FROM `cusdetails` WHERE `id` = $id";
$raw = mysqli_query($connection, $query);

if($raw > 0)
    return header('Location: ./index.php');
else 
    echo "Error";
?>