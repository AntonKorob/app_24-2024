<?php
    require_once 'classes/Membership.php';
    $membership = new Membership();
    $membership->confirm_Member();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Web-site</title>
    </head>

    <body>
        <div class="container">
            <h3>First page</h3>
            <button>
                <a href="login.php?status=loggedout">Log Out</a>
            </button>
        </div>

    </body>

</html>