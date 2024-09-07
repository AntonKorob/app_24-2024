<?php

require 'Mysql.php';

class Membership{
    function validate_user($un, $pwd){
        $mysql = new Mysql();
        $ensure_credentials = $mysql->verify_Username_and_Pass($un, md5($pwd));

        if($ensure_credentials){
            $_SESSION['status'] = 'autorized';
            header('Location: index.php');
        }else return "Введите верные данные";
    }

    function log_out_user(){
        if(isset($_SESSION['status'])){
            unset($_SESSION['status']);

            if(isset($_COOKIE[session_name()])){
                setcookie(session_name(), "", time ()-1000);
                session_destroy();
            }
        }
    }

    function confirm_Member(){
        session_start();
        if($_SESSION['status'] != 'autorized'){
            header('Location: index.php'); 
        };
    }
}