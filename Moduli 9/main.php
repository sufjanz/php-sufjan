<?php

     $username = $_POST['username'];
     $password = $_POST['username'];
     echo $username;
     echo "br";
     echo $password;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Moduli 9</title>
</head>
<body>
    <form action="add.php" method="POST">
    <label for="username" >Username:</label><br>
    <input type="text" name="Username" id="username" placeholder="Username"><br>
    <label for="password" >Password:</label><br>
    <input type="password" name="Password" id="password" placeholder="Password"><br>
    <input type="Submit" value="Submit">
    </form>
</body>
</html>
