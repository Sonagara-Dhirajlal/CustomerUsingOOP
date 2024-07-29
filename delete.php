<?php

include "./connection.php";

$id = $_GET['id'];

$query = "DELETE FROM `cdetails` WHERE `id` = (?)";
$params = [$id];
$statement = $connection->prepare($query);
$raw = $statement->execute($params);

if($raw > 0)
    return header('Location: ./index.php');
else 
    echo "Error";
?>