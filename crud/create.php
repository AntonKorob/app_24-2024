<?php
require '../lncludes/constance.php';  

if(isset($_POST['company']) && isset($_POST['contact']) && isset($_POST['country']) ){  
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $company = $_POST['company'];
    $contact = $_POST['contact'];
    $country = $_POST['country'];
    
    $sql = "INSERT INTO table_task(company, contact, country)
VALUES ('$company', '$contact' , '$country')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

mysqli_close($conn);

header ("Location: ../home.php ");