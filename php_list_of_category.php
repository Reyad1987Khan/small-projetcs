<?php
require('php_connection_create.php');
?>

<!DOCTYPE html>

<html>
  <head>
      <title>Category List</title>
  </head>
  <body>
    <?php
    $sql = "select * from category";
    $query = $conn->query($sql);
    echo "<table><tr>";
    while($data = mysqli_fetch_assoc($query)){
        $category_name =  $data['category_name'];
        echo "<td><h3>$category_name</h3></td>";
    }
    echo "</tr></table>"
    ?>
  </body>
</html>