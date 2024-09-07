<?php

require_once 'lncludes/constance.php';

class Mysql
{
    private $conn;
    
    function __construct(){
        $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME) or die("Не могу соединиться с базой данных");
    }
    
    function verify_Username_and_Pass($un, $pwd){

        $query = "SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1"; 

        if($stmt = $this->conn->prepare($query)){
            $stmt->bind_param('ss', $un, $pwd);
            $stmt->execute();

            if($stmt->fetch()){
                $stmt->close();
                return true;
            }
        }
        
    }
}