<?php

$host="localhost";
$user="root";
$pass="";
$dbname="movie";

try {
	
	$conn=new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    echo "Connected successfully";


} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}
 ?>