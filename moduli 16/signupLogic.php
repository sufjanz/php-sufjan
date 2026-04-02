<?php

    include_once("config.php");

    if(isset($_POST['submit'])) {
        $emri = $_POST['emri'];
        $username = $_POST['username'];
        $email = $_POST['email'];

        $tempPass = $_POST['password'];
        $password = password_hash($tempPass, PASSWORD_DEFAULT);

        $tempConfirmPass = $_POST['confirmPassword'];
        $confirmPassword = password_hash($tempConfirmPass, PASSWORD_DEFAULT);

        if(empty($emri) || empty($email) || empty($username) || empty($password) || empty($confirmPassword)) {
            echo "You haven't filled all the fields!";
        }else {
            $sql = "INSERT INTO users (emri, username, email, password, confirm_password) VALUES (:emri, :username, :email, :password, :confirmPassword)";
            $insertSql = $conn->prepare($sql);
            $insertSql->bindParam(':emri', $emri);
            $insertSql->bindParam(':username', $username);
            $insertSql->bindParam(':email', $email);
            $insertSql->bindParam(':password', $password);
            $insertSql->bindParam(':confirmPassword', $confirmPassword);
            
            $insertSql->execute();

            header("Location: login.php");
        }
    }

?>