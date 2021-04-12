<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "php_course";

try{
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

}catch(Exception $e){
    echo "Exception at DB connection.";
}

function getUsers() {
    global $conn;
    $result = $conn->query("SELECT * FROM `php_course`.`users`");
    $users = [];
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $users[]= [
                'id' => $row['id'],
                'username' => $row['username'],
                'email' => $row['email'],
                'password' => $row['password'],
            ];
        }
    }
    return $users;
}



