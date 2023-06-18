  <?php

  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databasename = "store_db";
  
  // Create connection
  $conn = new mysqli($hostname, $username, $password, $databasename);
  
  // Check connection
  if ($conn->connect_error) {
// Note : In PHP, the -> symbol is used as the object operator. It is used to access methods and properties of an object.
// When you have an object instance, you use the -> operator to call a method or access a property of that object. 
// Note that the -> operator is specific to object-oriented programming in PHP. It is used to interact with objects and their members, 
// such as properties and methods.
    die("Connection failed: " . $conn->connect_error);
  }
  ?>

<!DOCTYPE html>

<html>
    <head>
        <title> Add Category</title>
    </head>
    <body>
      <?php
            if (isset($_GET['category_name'])){
              
                $category_name        =  $_GET['category_name'];
                $category_entry_date  =  $_GET['category_entry_date'];
                $category_entry_by    =  $_GET['category_entry_by'];

                // Inser data to Table
                $sql =  "INSERT INTO category (category_name, category_entry_date, category_entry_by)
                        VALUES ('$category_name ', '$category_entry_date', '$category_entry_by')";
            if ($conn->query($sql) == TRUE) {
                echo 'Data Inserted!';
            }else {
              echo "Error shows" . $conn->error;
            }
          }
      ?>
        <form action="php_add_catagory.php" method="GET">
            Category : <br>
            <input type="text" name="category_name"><br><br>
            <input type="date" name="category_entry_date"><br><br>
            <input type="text" name="category_entry_by"><br><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>