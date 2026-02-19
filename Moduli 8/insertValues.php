<?php

$host = 'localhost';
$db = 'restaurant_lisa';
$user = 'root';
$password = '';


try{
    
    $conn = new PDO("mysql:host=$host; dbname=$db" , $user, $password);

    $username = "Zani";

    $password = password_hash("myPassword", PASSWORD_DEFAULT);

    $sql =   "INSERT INTO user(usernames, password) VALUES ('$username', '$password')";

    $conn->exec($sql);

    echo "Connected";

}catch(Exeption $e){

    echo "Not Connected";

}

?>