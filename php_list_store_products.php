<?php
require('php_connection_create.php');
$namesql = "select * from products";
$namesql_query = $conn->query($namesql);

    $prod_data = array();
    while($namesql_value = mysqli_fetch_assoc($namesql_query)){
        $product_id             = $namesql_value['product_id'];
        $product_name           = $namesql_value['product_name'];
        $prod_data[$product_id] = $product_name;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Store Products</title>
    <link rel="stylesheet" href="project01.css">
</head>
<body>
    <?php
    $sql = "select * from store_products";
    $sql_query = $conn->query($sql);
    
    echo "<table>
            <tr>
                <th>Store Product ID</th>
                <th>Product Name</th>
                <th>Product Quentity</th>
                <th>Product Entry Date</th>
                <th>Action</th>
            </tr>";
    
    while($sql_query_value = mysqli_fetch_assoc($sql_query)){
        // echo "<pre>"; print_r($sql_query_value); 
        $store_prod_id          = $sql_query_value['store_prod_id'];
        $store_prod_name        = $sql_query_value['store_prod_name'];
        $store_prod_qty         = $sql_query_value['store_prod_qty'];
        $store_prod_entry_date  = $sql_query_value['store_prod_entry_date'];
    
        echo "<tr> 
                    <td>$store_prod_id</td>
                    <td> $prod_data[$store_prod_name]</td>
                    <td>$store_prod_qty</td>
                    <td>$$store_prod_entry_date</td>
                    <td><a href='php_edit_store_products.php?id=$store_prod_id'>Edit</a></td>
            
                </tr>";
        }
        echo "</table>";
    ?>

<script src="project01.js"></script>  
</body>
</html>