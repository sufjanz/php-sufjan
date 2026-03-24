<?php

include_once('config.php');

$sql = "SELECT * FROM  products";

$getUsers = $conn->prepare($sql);

$getUsers -> execute();

$users = $getUsers->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: 1px solid black;
        }

        td, th{
            padding: 15px;
        }

        th{
            background-color: green;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Id</th>
        <th>Product</th>
        <th>Price</th>
        <th>Description</th>
    </tr>



    <?php
        foreach($products as $user){ ?>
            <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['product']; ?></td>
            <td><?php echo $user['price']; ?></td>
            <td><?php echo $user['description']; ?></td>
            </tr>
        <?php } ?>
</table>

    
</body>
</html>