<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'restaurant lumi';

try{
    $connect = new PDO("mysql:host=$server; dbname=$dbname", $username, $password);
}catch(Expetion $e){
    echo "something went wrong";
}


?>