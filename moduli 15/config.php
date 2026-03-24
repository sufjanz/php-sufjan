<?php

$host="localhost";
$user="root";
$pass="";
$dbname="challenge";

try {
	
	$conn=new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

} catch (PDOException $e) {
	echo "error: " . $e->getMessage();
}
 ?>