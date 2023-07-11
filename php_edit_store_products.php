<?php
require('php_connection_create.php');
// echo $_SERVER['PHP_SELF'];
$store_prod_id = $store_prod_name = $store_prod_qty = $store_prod_entry_date = '';
if(isset($_GET['id'])) {
    $get_id = $_GET['id'];
$sql = ("select * from store_products where store_prod_id = $get_id");
$edit_sql_query = $conn->query($sql);

    $edit_sql_value = mysqli_fetch_assoc($edit_sql_query);
    $store_prod_id              = $edit_sql_value['store_prod_id'];
    $store_prod_name            = $edit_sql_value['store_prod_name'];
    $store_prod_qty             = $edit_sql_value['store_prod_qty'];
    $store_prod_entry_date      = $edit_sql_value['store_prod_entry_date'];
} 
if(isset($_POST['store_prod_name'])){
    $new_str_prod_name              = $_POST['store_prod_name'];
    $newstr_prod_qty                = $_POST['store_prod_qty'];
    $new_str_prod_entry_date        = $_POST['store_prod_entry_date'];
    $newstore_prod_id               = $_POST['store_prod_id'];

    $update_value = "UPDATE store_products 
                     SET store_prod_name='$new_str_prod_name',
                     store_prod_qty='$newstr_prod_qty',
                     store_prod_entry_date='$new_str_prod_entry_date' 
                     WHERE store_prod_id=$newstore_prod_id";

                    if($conn->query($update_value) == TRUE){
                        echo "Data Successfully Updated!";
                    }else {
                       echo "Update status show : . $conn->error";
                    }      
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Products Edit</title>
    <link rel="stylesheet" href="project01.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    <label for="store_prod_id"> Product ID:</label>
    <input type="text" name="store_prod_id" id="store_prod_id" value="<?php echo $store_prod_id ?>" readonly><br><br>

    <label for="store_prod_name">Product Name:</label>
    <select name="product_id" id="product_id">
    <?php
        $proname = "select * from products";
        $prod_sql = $conn->query($proname);
        while($prod_sql_value = mysqli_fetch_assoc($prod_sql)){
            $prod_id            = $prod_sql_value["product_id"];
            $prod_name          = $prod_sql_value["product_name"];
            ?>
                <option value='<?php $prod_id ?>' <?php if($store_prod_name == $prod_id) { echo 'selected';}?>>
                <?php echo $prod_name ?>
            </option>";
        <?php } ?>


    </select>
    <input type="text" name="store_prod_name" id="store_prod_name" value="<?php echo $store_prod_name ?>"><br><br>

    <label for="store_prod_qty">Product Quentity:</label>
    <input type="number" name="store_prod_qty" id="store_prod_qty" value="<?php echo $store_prod_qty ?>"><br><br>

    <label for="store_prod_entry_date">Product Entry Date:</label>
    <input type="date" name="store_prod_entry_date" id="store_prod_entry_date" value="<?php echo $store_prod_entry_date ?>"><br><br>
<input type="submit" id="submit" value="Update">

    </form>
<script src="project01.js"></script>  
</body>
</html>