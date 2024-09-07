<?php
session_start();

require 'classes/Membership.php';

$membership = new Membership();

if(isset($_GET['status']) && $_GET['status'] == 'loggedout'){
    $membership->log_out_user();
};

if($_POST && !empty($_POST['username']) && !empty($_POST['pwd'])){
    $response = $membership->validate_user($_POST['username'], $_POST['pwd']);
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Login</title>
    </head>

    <body>
        <div class="login">
            <h3>Введите свои данные</h3>
            <form action="" method="post">
                <p>
                    <label for="name">User name :</label>
                    <input type="text" name="username">
                </p>
                <p><label for="password">Password :</label>
                    <input type="password" name="pwd">
                </p>
                <p><input type="submit" value="Login"></p>
            </form>

            <?php if(isset($response)) echo "<h4>". $response . "</h4>"  ?>
        </div>
    </body>

</html>