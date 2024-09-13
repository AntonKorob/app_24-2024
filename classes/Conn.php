<?php
require 'lncludes/constance.php';

class Mysql
{
    function conn(){
        
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
}
}