<?php
require('php_connection_create.php');
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Edit Category</title>
  </head>
  <body>
    <?php
    $category_id = $category_name = $category_entry_date = '';
      if(isset($_GET['id'])){
        $getid = $_GET['id'];
        $sql = "select * from category where category_id = $getid";
        $sql_query = $conn->query($sql);
        $sql_query_value = mysqli_fetch_assoc($sql_query);
        // echo "<pre>"; echo print_r($sql_query_value);
        $category_id          = $sql_query_value['category_id'];
        $category_name        = $sql_query_value['category_name'];
        $category_entry_date  = $sql_query_value['category_entry_date'];
      }
      // Get all the data
      if(isset($_GET['category_name'])){
        $new_category_name            =$_GET['category_name'];
        $category_entry_date          =$_GET['category_entry_date'];
        $category_id                  =$_GET['category_id'];

        $sql1 = "UPDATE category SET
                category_name='$new_category_name',
                category_entry_date='$category_entry_date' where category_id =$category_id";
                if($conn->query($sql1) == TRUE){
                    echo 'Update Successfull!';
                }else {
                  echo "Error shows" . $conn->error;
                }
      }   
    ?>
    <!-- Send data to form for uodate  -->
      <form action="php_edit_category.php" method="GET">
          Category : <br>
          <input type="text" name="category_name" value="<?php echo $category_name ?>"/><br><br>
          <input type="date" name="category_entry_date" value="<?php echo date('Y-m-d',strtotime($category_entry_date)) ?>"/><br><br>
          <input type="hidden" name="category_id" value="<?php echo $category_id ?>"/>
          <input type="submit" value="Update">
      </form>
  </body>
</html>