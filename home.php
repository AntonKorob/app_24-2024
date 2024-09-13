<?php
session_start();

// header
    require 'layouts/header.php'; 
    ?>

<div class="container">
    <h3>List data</h3>
    <form action="crud/create.php" method="post">

        <input type="text" name="company" required>
        <input type="text" name="contact" required>
        <input type="text" name="country" required>

        <button type="submit">Create</button>
    </form>
    <button><a href="crud/delete.php">Delete last</a></button>
    <button><a href="crud/delete_all.php">Delete ALL</a></button>
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