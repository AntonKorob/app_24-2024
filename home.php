<?php
session_start();

// header
    require 'layouts/header.php'; 
    ?>

<div class="container">
    <h3>List data</h3>
    <form action="crud/create.php" method="post">

        <input class="p-3 m-2" type="text" name="company" required>
        <input class="p-3 m-2" type="text" name="contact" required>
        <input class="p-3 m-2" type="text" name="country" required>

        <button class="btn btn-success mt-1" type="submit">Create</button>
    </form>
    <button class="btn btn-secondary "><a href="crud/delete.php">Delete last</a></button>
    <button class="btn btn-secondary "><a href="crud/delete_all.php">Delete ALL</a></button>
    <hr>

    <?php  
    
    require './lncludes/constance.php';  

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT id, company, contact, country FROM table_task";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["company"]. " " . $row["contact"]. " " . $row["country"].  "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();

        
    ?>

</div>

<!-- footer -->
<?php require 'layouts/footer.php'; ?>