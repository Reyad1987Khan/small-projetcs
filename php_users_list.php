<?php
require('php_connection_create.php');


$userList = "select * from users";
$userQuery = $conn->query($userList);

    echo"<table>
        <tr>   
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mail ID</th>
            <th>Password</th>
            <th>Edit</th>
        </tr>";
while($queryValue = mysqli_fetch_assoc($userQuery)){
    $userID         =  $queryValue['user_id'];
    $userFName      =  $queryValue['u_first_name'];
    $userLName      =  $queryValue['u_last_name'];
    $userUmail      =  $queryValue['u_mail'];
    $userPassword   =  $queryValue['u_password'];
    echo"<tr>
            <td>$userID</td>
            <td>$userFName</td>
            <td>$userLName</td>
            <td>$userUmail</td>
            <td>$userPassword</td>
            <td><a href='php_user_edit.php? id=$userID'>Edit</a></td>

    </tr>";
}
echo "</table>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users View</title>
    <link rel="stylesheet" href="project01.css">
</head>
<body>
  
</body>
<script src="project01.js"></script> 
</html>