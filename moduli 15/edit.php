<?php
include_once('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "UPDATE products SET name=:name, price=:price, description=:description WHERE id=:id";

    $prep = $conn->prepare($sql);

    $prep->bindParam(':id', $id);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':price', $price);
    $prep->bindParam(':description', $description);

    $prep->execute();

    header("Location:dashboard.php");

}
?>