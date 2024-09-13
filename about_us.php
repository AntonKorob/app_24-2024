<?php
session_start();

// header
    require 'layouts/header.php'; 
    ?>

<div class="container">
    <h3>About us page</h3>


    <?php  
    
    require './lncludes/constance.php';  

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "SELECT id, title, text, description FROM about_us";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $sql = "SELECT id, title, text, description FROM about_us";
    
    for($i = 0; $i <= $row['id']; $i++){
        ?>
    <div class="main">
        <div class="title">
            <?$row["title"]?>
        </div>
        <div class="text">

            <?$row["text"]?>
        </div>
        <div class="description">
            <?$row["description"]?>
        </div>
    </div>

    <?php  

    }

    // echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["text"]. " " . $row["description"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $conn->close();


    ?>


</div>

<!-- footer -->
<?php require 'layouts/footer.php'; ?>