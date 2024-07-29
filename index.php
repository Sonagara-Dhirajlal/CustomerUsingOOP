<?php
include "./connection.php";
$query = "SELECT * FROM `cdetails`";
$statement = $connection->prepare($query);
$statement->execute();
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
</head>
<body>
        <form action="./conn.php" method="POST" >
        
            <label for="">Name : </label>
            <input type="text" name="name" placeholder="Enter name" autofocus>
            <br>
            <br>
        
            <label for="">MobileNumber : </label>
            <input type="text" name="mobilenumber" placeholder="Enter mobilenumber">
            <br>
            <br>
        
            <label for="">E-mail : </label>
            <input type="text" name="email" placeholder="Enter email">
            <br>
            <br>
        
            <label for="">Address : </label>
            <input type="text" name="address" placeholder="Enter address">
            <br>
            <br>
        
            <input type="submit" value="Submit">
        </form>
        <br>
        <br>
        <table border="1">
            <thead>
                <th>Name</th>
                <th>MobileNumber</th>
                <th>E-mail</th>
                <th>Address</th>
                <th>Delete</th>
                <th>Update</th>
            </thead>
            <tbody>
                <?php foreach($users as $user) { ?>
                    <tr>
                        <td><?php echo $user['Name']?></td>
                        <td><?php echo $user['MobileNumber']?></td>
                        <td><?php echo $user['Email']?></td>
                        <td><?php echo $user['Address']?></td>
                        <td><a href="./delete.php?id=<?= $user['ID']?>">Delete</a></td>
                        <td><a href="./updatepage.php?id=<?= $user['ID']?>">Update</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>