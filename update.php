<?php

$id = $_POST['id'];
$name = $_POST['name'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$address = $_POST['address'];

$connection = mysqli_connect('localhost', 'root', '', 'me');
$query = "UPDATE `cusdetails` SET `Name` = '$name', `MobileNumber` = '$mobilenumber', `Email` = '$email', `Address` = '$address' WHERE `Id` = $id ";
$row = mysqli_query($connection, $query);

if ($row > 0)
    return header('Location: ./index.php');
else
    echo "Failed to update data";

?>