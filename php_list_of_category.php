<?php
require('php_connection_create.php');
?>

<!DOCTYPE html>

<html>
</head>
      <title>Category List</title>
  </head>
  <body>
    <?php
    $sql = "select * from category";
    $sql_query = $conn->query($sql);
    echo "<table border='1'>
            <tr> 
              <th>Category ID</th>
              <th>Category Name</th>
              <th>Category Entry Date</th>
              <th>Category Entry By</th>
              <th>Action</th>
            </tr>";
      while($sql_query_value = mysqli_fetch_assoc($sql_query)) {
       $category_id                 = $sql_query_value['category_id'];
       $category_name               = $sql_query_value['category_name'];
       $category_entry_date         = $sql_query_value['category_entry_date'];
       $category_entry_by           = $sql_query_value['category_entry_by'];
       echo "<tr> 
                <td>$category_id</td>
                <td>$category_name</td>
                <td>$category_entry_date</td>
                <td>$category_entry_by</td>
                <td><a href='php_edit_category.php?id=$category_id'>Edit</a></td>
        
            </tr>";
    }
    echo "</table>";
    ?>
  </body>
</html>