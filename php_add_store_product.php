<?php
require('php_connection_create.php');
// echo $_SERVER['PHP_SELF'];
require('php_all_functions.php');

$store_prod_name = $store_prod_qty = $store_prod_entry_date = '';
if (isset($_POST['product_name'])){
    $store_prod_name               = $_POST['product_name'];
    $store_prod_qty                = $_POST['store_prod_qty'];
    $store_prod_entry_date         = $_POST['store_prod_entry_date'];

    $sql = "INSERT INTO store_products (store_prod_name,store_prod_qty,store_prod_entry_date) 
            VALUES ('$store_prod_name','$store_prod_qty','$store_prod_entry_date')"; 
    if($conn->query($sql) == TRUE){
        echo 'Data Update Successfully';
    } else{ 
                echo 'Insert Error shows:'.$conn->error;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Store Products</title>
    <link rel="stylesheet" href="project01.css">

</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="store_prod_name">Product Name:</label>
        <select name="product_name" id="product_name">
        <?php data_list('products','product_id','product_name');?>
        </select> <br><br>

        <label for="store_prod_qty">Product Quentity:</label>
        <input type="text" name="store_prod_qty" id="store_prod_qty"><br><br>

        <label for="store_prod_entry_date">Entry Date:</label>
        <input type="date" name="store_prod_entry_date" id="store_prod_entry_date"><br><br>
        <input type="submit" id="btn" value="Submit" onclick="return savedata();">
    </form>

<script src="project01.js"></script>  
</body>
</html>