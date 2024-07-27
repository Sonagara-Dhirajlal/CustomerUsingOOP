<?php

include "./connection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$address = $_POST['address'];

$query = "UPDATE `cusdetails` SET `Name` = (?), `MobileNumber` = (?), `Email` = (?), `Address` = (?) WHERE `Id` = (?) ";
$params = [$name,$mobilenumber,$email,$address,$id];

$statement = $connection->prepare($query);
$row = $statement->execute($params);

if ($row > 0)
    return header('Location: ./index.php');
else
    echo "Failed to update data";

?>