<?php

$id = $_GET['id'];

include "./connection.php";
$query = " SELECT * FROM `cusdetails` WHERE `id` = (?) ";
$params = [$id];
$statement = $connection->prepare($query);
$row = $statement->execute($params);
$user = $statement->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="./update.php" method="POST" > 
            
            <input type="hidden" name="id" value ="<?= $user['ID']?>" placeholder="Enter id">
            <br>
            <br>

            <label for="">Name : </label>
            <input type="text" name="name" value ="<?= $user['Name']?>" placeholder="Enter name" autofocus>
            <br>
            <br>
        
            <label for="">MobileNumber : </label>
            <input type="text" name="mobilenumber" value ="<?= $user['MobileNumber']?>" placeholder="Enter mobilenumber">
            <br>
            <br>
        
            <label for="">E-mail : </label>
            <input type="text" name="email" value ="<?= $user['Email']?>" placeholder="Enter email">
            <br>
            <br>
        
            <label for="">Address : </label>
            <input type="text" name="address" value ="<?= $user['Address']?>" placeholder="Enter address">
            <br>
            <br>
        
            <input type="submit" value="Update">
        </form>
</body>
</html>