<?php
require '../lncludes/constance.php';  

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
    $sql_delete = "DELETE FROM table_task ORDER BY id DESC LIMIT 1 ";
    if ($conn->query($sql_delete) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn_db->error;
    }
  
  $conn->close();

  header ("Location: ../home.php ");
  