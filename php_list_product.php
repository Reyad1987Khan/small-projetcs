<?php
require('php_connection_create.php');

$sql = "select * from products";
$sql_query = $conn->query($sql);
    echo "<table class='tab' id='tab'>
    <tr>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Product Ccategory</th>
    <th>Product Code</th>
    <th>Product Entry Date</th>
    <th>Product Entry By</th>
    <th>Action</th>
    </tr>";

while($sql_query_value = mysqli_fetch_assoc($sql_query)){
        $product_id         =  $sql_query_value['product_id'];
        $product_name       =  $sql_query_value['product_name'];
        $product_category   =  $sql_query_value['product_category'];
        $product_code       =  $sql_query_value['product_code'];
        $product_entry_date =  $sql_query_value['product_entry_date'];
        $product_entry_by   =  $sql_query_value['product_entry_by'];
        echo "<tr>
            <td>$product_id</td>
            <td>$product_name</td>
            <td>$product_category</td>
            <td>$product_code</td>
            <td>$product_entry_date</td>
            <td>$product_entry_by</td>
            <td><a href='php_edit_product.php?id=$product_id'>Edit</td>
        </tr>";
}
echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project01.css">
    <title>Products List</title>
</head>
<body>  
    <script src=''> </script>
</body>
</html>