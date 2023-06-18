<?php
require('php_connection_create.php');
// echo $_SERVER['PHP_SELF'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Store Products</title>
    <link rel="stylesheet" href="project01.css">

</head>
<body>
    
<form action="<?php echo $_SERVER('PHP_SELF'); ?>">
<label for="store_prod_id"> Product ID:</label>
    <input type="text" name="store_prod_id" id="store_prod_id" value="">

</form>

<script src="project01.js"></script>  
</body>
</html>