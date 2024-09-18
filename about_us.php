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
    
    ?>
    <div class="row d-flex">
        <div class=" col-6 border border-info-subtle rounded m-2 ">
            <div class="text-center p-3">
                <?php echo $row["title"]?>
            </div>
            <div class="p-3">
                <?php echo $row["text"]?>
            </div>
            <div class="border-secondary border-top p-3 mt-2 ">
                <?php echo $row["description"]?>
            </div>

        </div>
    </div>
    <?php
    
    }
    } else {
    echo "0 results";
    }

    $conn->close();

    ?>

</div>

<!-- footer -->
<?php require 'layouts/footer.php'; ?>