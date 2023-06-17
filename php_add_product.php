<?php
require('php_connection_create.php');
$product_name =  $product_category =  $product_code =  $product_entry_date   =  '';
if (isset($_POST['product_name'])){
  $product_name         =  $_POST['product_name'];
  $product_category     =  $_POST['product_category'];
  $product_code         =  $_POST['product_code'];
  $product_entry_date   =  $_POST['product_entry_date'];


  // Inser data to Table
  $sql =  "INSERT INTO products (product_name, product_category, product_code, product_entry_date)
          VALUES ('$product_name','$product_category','$product_code','$product_entry_date')";
  if ($conn->query($sql) == TRUE) {
      echo 'Data Inserted!';
  }else {
    echo'Data not inserted!';
  }
}
// Select statement for category List
    $sql = "select * from category";
    $sql_query = $conn->query($sql);
  
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Add Products</title>
  </head>
  <body>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
          Products : <br>
          <label for="prod_name">Product Name:</label>
          <input type="text" name="product_name"><br><br> 
          <label for="prod_cat_name">Product Category:</label>
              <select name="product_category">
                <?php
                  while($sql_query_value = mysqli_fetch_array($sql_query)){
                  // echo "<pre>"; print_r($sql_query_value);
                              $category_id       = $sql_query_value['category_id'];
                              $category_name     = $sql_query_value['category_name'];
                              echo "<option value='$category_id'>$category_name</option>";
                  }
                ?>
              </select> <br><br>
          <label for="prod_code">Product Code:</label>
          <input type="text" name="product_code"><br><br>
          <label for="prod_entry">Entry Date:</label>
          <input type="date" name="product_entry_date"><br><br>
          <input type="submit" value="Submit">
      </form>

  </body>
</html>