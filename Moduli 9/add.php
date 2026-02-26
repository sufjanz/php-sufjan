<?php
    include_once('config.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users(username,password) values (:username,:password)";
        $sqlQuery = $conn -> prepare($sql);

        $sqlQuery->bindParam(':username', $username);
        $sqlQuery->bindParam(':password', $password);

        $sqlQuery->execute();

        echo "data saved succesfully";
    }
    

?>