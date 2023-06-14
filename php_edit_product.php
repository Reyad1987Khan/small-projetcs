<?php
require('php_connection_create.php');
// echo $_SERVER['PHP_SELF'];

$product_id = $product_name = $product_category = $product_entry_date = '';
if(isset($_GET['id'])){
    $get_id = $_GET['id'];
    // for getting data
    $sql = ("select * from products where product_id = $get_id");
        $sql_query = $conn->query($sql);
        $sql_query_value = mysqli_fetch_assoc($sql_query);
        // echo "<pre>"; print_r($sql_query_value);
        $product_id             = $sql_query_value['product_id'];
        $product_name           = $sql_query_value['product_name'];
        $product_category       = $sql_query_value['product_category'];
        $product_entry_date     = $sql_query_value['product_entry_date'];
}


// for posting data
if(isset($_POST['product_name'])){
    $new_product_name           = $_POST['product_name'];
    $new_product_category       = $_POST['product_category'];
    $new_product_entry_date     = $_POST['product_entry_date'];
    $new_product_id             = $_POST['product_id'];

    $sql_update = "UPDATE products 
                   SET product_name='$new_product_name',
                   product_category='$new_product_category',
                   product_entry_date='$new_product_entry_date'
                   where product_id=$new_product_id";

                   if($conn->query($sql_update) == TRUE){
                    echo 'Update successfull!';
                   }else {
                    echo "Error Massage says that:" . $conn->error;
                   }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project01.css">
    <title>Edit Products</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <label for="product_id">Product ID</label>
    <input type="text" name="product_id" id="product_id" readonly value="<?php echo $product_id ?>"/><br><br>

    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" id="product_name" value="<?php echo $product_name ?>"/><br><br>

    <label for="product_category">Product Category</label>
    <select name="product_category" id="product_category">
        <?php 
            $selt_qury = "select * from category";
            $selt_qury_val =$conn->query($selt_qury);
            while($selt_qury_value = mysqli_fetch_assoc($selt_qury_val)){
                $category_id_list = $selt_qury_value['category_id'];
                $category_name_list = $selt_qury_value['category_name'];
        ?>
                <option value='<?php echo $category_id_list ?>' <?php if($category_id_list == $product_category){
                    echo 'selected';}?> >
                <?php echo $category_name_list ?> 
                </option>
           <?php }
            ?>
    </select><br><br>

    <label for="product_entry_date">Product Entry Date</label>
    <input type="date" name="product_entry_date" id="product_entry_date" value="<?php echo date('Y-m-d',strtotime($product_entry_date)) ?>"><br><br>
          
    <input type="submit" value="Update">

    </form>
<script src="project01.js"></script>
</body>
</html>