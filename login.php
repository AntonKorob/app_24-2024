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


<?php require 'layouts/header.php'; ?>
<div class="container">

    <div class="login">
        <h3>Введите свои данные</h3>
        <form class="p-2 m-2" action="" method="post">
            <p>
                <label for="name">User name :</label>
                <input class="p-3 m-2" type="text" name="username">
            </p>
            <p><label for="password">Password :</label>
                <input class="p-3 m-2" type="password" name="pwd">
            </p>
            <button class="btn btn-success" type="submit">Login</button>
        </form>

        <?php if(isset($response)) echo "<h4>". $response . "</h4>"  ?>
    </div>
</div>

<?php require 'layouts/footer.php'; ?>