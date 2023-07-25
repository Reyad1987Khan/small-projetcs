<?php
    require('php_connection_create.php');
    // echo $_SERVER['PHP_SELF'];


    $user_id = $u_first_name = $u_last_name = $u_mail = $u_password = '';
    if(isset($_GET['id'])){
        $get_id = $_GET['id'];
        $query = "select * from users where user_id = $get_id";
        $get_query = $conn->query($query);
        $query_value = mysqli_fetch_assoc($get_query);
        $user_id            = $query_value['user_id'];
        $u_first_name       = $query_value['u_first_name'];
        $u_last_name        = $query_value['u_last_name'];
        $u_mail             = $query_value['u_mail'];
        $u_password         = $query_value['u_password'];
    }

    if(isset($_POST['u_first_name'])){
            $newUser_id           = $_POST['user_id'];
            $newfname              = $_POST['u_first_name'];
            $newlname              = $_POST['u_last_name'];
            $newmail               = $_POST['u_mail'];
            $newpassword           = $_POST['u_password'];

           $update = "UPDATE users 
            SET u_first_name    = '$newfname',
                u_last_name     = '$newlname',
                u_mail          = '$newmail',
                u_password      = '$newpassword'
                where user_id = $newUser_id";
        if($conn->query($update) == TRUE ){
            echo "Update successfully!";
        }else {
            echo "Error Shows:" .conn->error;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Edit</title>
    <link rel="stylesheet" href="project01.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="u_first_name">Frist Name:</label>
        <input type="text" name="u_first_name" id="u_first_name" value="<?php echo $u_first_name?>"> <br><br>

        <label for="u_last_name">Last Name:</label>
        <input type="text" name="u_last_name" id="u_last_name" value="<?php echo $u_last_name?>"> <br><br>

        <label for="u_mail">Mail ID:</label>
        <input type="text" name="u_mail" id="u_mail" value="<?php echo $u_mail?>"> <br><br>

        <label for="u_password">Password:</label>
        <input type="text" name="u_password" id="u_password" value="<?php echo $u_password ?>"> <br><br>

        <input type="submit" value="Update">
    </form>
    
</body>
<script src="project01.js"></script> 
</html>