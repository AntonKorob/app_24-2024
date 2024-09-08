<?php
    require_once 'classes/Membership.php';
    $membership = new Membership();
    $membership->confirm_Member();
    ?>

<?php require 'layouts/header.php' ?>

<div class="container">
    <h3>First page</h3>

    <table class="head_table">
        <tr>
            <th>Company</th>
            <th>Contact</th>
            <th>Country</th>
        </tr>
        <?php  for($i = 0; $i <= 6; $i++){ ?>

        <tr>
            <td>When a given file </td>
            <td>When a given file contains xtension</td>
            <td>extension</td>
        </tr>

        <?php } ;?>
    </table>

</div>

<?php require 'layouts/footer.php' ?>