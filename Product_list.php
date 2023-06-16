<?php
require('php_connection_create.php');


$sql1 = "select * from products";
$sql1_query = $conn->query($sql1);

echo "<table id='tab' class='tab'>
        <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Category</th>
        <th>Product Code</th>
        <th>Product Entry Date</th>
        <th>Prod Update Date</th>
        <th>Product Entry Bby</th>
        <th>Action</th>
        </tr>";
while($sql1_query_value = mysqli_fetch_assoc($sql1_query)){
    // echo "<pre>"; print_r($sql1_query_value);
     $product_id                = $sql1_query_value['product_id'];
     $product_name              = $sql1_query_value['product_name'];
     $product_category          = $sql1_query_value['product_category'];
     $product_code              = $sql1_query_value['product_code'];
     $product_entry_date        = $sql1_query_value['product_entry_date'];
     $prod_update_date          = $sql1_query_value['prod_update_date'];
     $product_entry_by          = $sql1_query_value['product_entry_by'];

    echo "<tr>
            <td>$product_id</td>
            <td>$product_name</td>
            <td>$product_category</td>
            <td>$product_code</td>
            <td>$product_entry_date</td>
            <td>$prod_update_date</td>
            <td>$product_entry_by</td>
            <td><a href='Product_edit.php? id=$product_id'>Edit</td> 
        
        </tr>";
};
echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project01.css">
    <title>Product List</title>
</head>
<body>
    <h1>Hello</h1>
<script src="project01.js"></script>
</body>
</html>