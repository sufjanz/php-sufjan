<?php

$host = 'localhost';
$user = 'root';
$password = '';


try{
    
    $conn = new PDO("mysql:host=$host" , $user, $password);

    $sql = "CREATE DATABASE testnita";

    $conn->exec($sql);

    echo " Database Connected";

    echo "Connected";

}catch(Exeption $e){

    echo "Not Connected";

    echo " Database Not Connected";

}


?>