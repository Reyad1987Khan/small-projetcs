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