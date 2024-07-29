
<?php

include "./connection.php";

$name = $_POST['name'];
$mobilenumber =$_POST['mobilenumber'];
$email =$_POST['email'];
$address =$_POST['address'];

$query = "INSERT INTO cdetails (`Name`,`MobileNumber`,`Email`,`Address`) VALUES (?,?,?,?)";
$params = [$name,$mobilenumber,$email,$address];

$statement = $connection->prepare($query);
$row = $statement->execute($params); 

if($row > 0)
    return header('Location: ./index.php');
else
    echo "Return";

?>