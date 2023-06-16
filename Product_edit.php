<?php
require('php_connection_create.php');

if(isset($_GET['id'])){
    $get_id =  $_GET['id'];
    $sql_1 = ("select * from products where product_id=$get_id");
    $sql_query = $conn->query($sql_1);
    $sql_query_value = mysqli_fetch_assoc($sql_query);
    echo $sql_query_value['product_id'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="project01.css">
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="product_id ">Product ID</label>
    <input type="text" name="product_id " id="product_id " value=""> <br><br>

    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="product_name" value=""><br><br>

    <label for="product_category">product Category</label>
    <input type="text" name="product_category" id="product_category" value=""><br><br>

    <label for="product_code">Product Code</label>
    <input type="text" name="product_code" id="product_code" value=""><br><br>

    <label for="product_entry_date">Product Entry Date</label>
    <input type="text" name="product_entry_date" id="product_entry_date" value=""><br><br>

    <input type="submit" id="btn" value="Update">
    </form>
<script src="project01.js"></script>
</body>
</html>