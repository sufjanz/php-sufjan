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

    $pdo->exec($sql);

    echo "new record created successfully";

}catch(DOExeption $e){
    echo $e->getMessage();
}


?>