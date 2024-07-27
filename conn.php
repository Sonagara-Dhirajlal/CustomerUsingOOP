
<?php
 $name = $_POST['name'];
 $mobilenumber =$_POST['mobilenumber'];
 $email =$_POST['email'];
 $address =$_POST['address'];

$connection = mysqli_connect('localhost','root','','me');
$query = "INSERT INTO cusdetails (`Name`,`MobileNumber`,`Email`,`Address`) VALUES ('$name','$mobilenumber','$email','$address')";
$row = mysqli_query($connection, $query);

if($row > 0)
    return header('Location: ./index.php');
else
    echo "Return";

?>