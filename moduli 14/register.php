<?php
include_once('config.php');

if(isset($_POST['signin'])) {

    $name = $_POST['your_name'];
    $surname = $_POST['your_surname'];
    $email = $_POST['your_email'];
    $password = $_POST['your_pass'];
    $repeat = $_POST['your_pass_repeat'];

    // check passwords
    if($password !== $repeat){
        echo "Passwords do not match!";
        exit;
    }

    // hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, surname, email, password) 
            VALUES (:name, :surname, :email, :password)";

    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':surname' => $surname,
        ':email' => $email,
        ':password' => $hashedPassword
    ]);

    header("Location: dashboard.php");
}
?>