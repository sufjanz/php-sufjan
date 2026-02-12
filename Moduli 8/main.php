<?php

$host = 'localhost';
$db = 'restaurant_lisa';
$user = 'root';
$password = '';


try{
    
    $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $password);

    $sql = "CREATE TABLE user(
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL)
    
    INSERT INTO user(usernames, password) VALUES
    ("lumi", "1234567"),
    ("reisi", "7654321"),
    ("jorA", "771143")";

    $conn->exec($sql);

    echo "Connected";

}catch(Exeption $e){

    echo "Not Connected";

}

?>