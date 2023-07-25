<?php
require('php_connection_create.php');
// echo $_SERVER['PHP_SELF'];
if(isset($_POST['u_first_name'])){
    $firstName          =  $_POST['u_first_name'];
    $lastName           =  $_POST['u_last_name'];
    $u_mail             =  $_POST['u_mail'];
    $uPassword          =  $_POST['u_password'];

    $sql_query = "INSERT INTO users(u_first_name,u_last_name,u_mail,u_password)
                        VALUES('$firstName','$lastName','$u_mail','$uPassword')";
            if($conn->query($sql_query) == TRUE){
                echo "Data Successfully inserted!";
            } else {
                	echo "Error shows:".$conn->error;
            }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add users</title>
    <link rel="stylesheet" href="project01.css">
</head>
<body>
            <h3>Add user</h3>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="form-body">

        <label for="u_first_name">First Name:</label>
        <input type="text" name="u_first_name" id="u_first_name" value=""> <br><br>

        <label for="u_last_name">Last Name:</label>
        <input type="text" name="u_last_name" id="u_last_name" value=""> <br><br>

        <label for="u_mail">User Mail:</label>
        <input type="text" name="u_mail" id="u_mail" value=""> <br><br>

        <label for="u_password">User Password:</label>
        <input type="password" name="u_password" id="u_password" value=""> <br><br>

        <input type="submit" value="Submit">
        
    </form>
    <script src="project01.js"></script> 
</body>
</html>