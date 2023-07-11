<?php
require('php_connection_create.php');
require('php_all_functions.php');

$spend_product_name = $spend_product_qty = $spend_product_date ='';
if(isset($_POST['spend_product_name'])){
   $spend_product_name              = $_POST['spend_product_name'];
   $spend_product_qty               = $_POST['spend_product_qty']; 
   $spend_product_date              = $_POST['spend_product_date']; 

   $insertion = "INSERT INTO spend_products (spend_product_name,spend_product_qty,spend_product_date)
                    VALUES('$spend_product_name','$spend_product_qty','$spend_product_date')";
                    if ($conn->query($insertion) == TRUE){
                       echo "Your Data inserted successfully!";  
                    }else {
                        echo "Error sows : ".$conn->error;
                    }
                    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spend Products</title>
    <link rel="stylesheet" href="project01.css">
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    
        <label for="spend_product_name">Product Name:</label>
        <select name="spend_product_name" id="spend_product_name">
            <?php
            $prod_name = "select * from products";
            $prod_name_list = $conn->query($prod_name);
            while($name = mysqli_fetch_assoc($prod_name_list)){
              $prod_id              = $name['product_id'];
              $prod_name            = $name['product_name'];
              ?>
              <option value='<?php $prod_id ?>' <?php if( $spend_product_name  == $prod_id){ echo 'selected';}?>>
              <?php echo $prod_name ?>
              </option>
            <?php } ?>
            https://codingstatus.com/how-to-insert-select-option-value-in-database-using-php-mysql/
            
            
        </select>
        <input type="text" id="spend_product_name" name="spend_product_name"><br><br>

        <label for="spend_product_qty">Product Quentity:</label>
        <input type="number" id="spend_product_qty" name="spend_product_qty"><br><br>

        <label for="spend_product_date">Product Spend Date:</label>
        <input type="date" id="spend_product_date" name="spend_product_date"><br><br>
        <input type="submit" id="submit" value="Submit" onclick="return savedata();>

    </form>
<script src="project01.js"></script>  
</body>
</html>