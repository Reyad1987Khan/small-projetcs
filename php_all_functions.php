<?php
function data_list($tablename, $column1, $column2){
    require('php_connection_create.php');
        $sql = "select * from $tablename";
        $sql_query = $conn->query($sql);

        while($sql_query_value = mysqli_fetch_array($sql_query)){
                $data_id         = $sql_query_value[$column1];
                $data_name       = $sql_query_value[$column2];
                echo "<option value='$data_id'>$data_name</option>";
            }
}

?>