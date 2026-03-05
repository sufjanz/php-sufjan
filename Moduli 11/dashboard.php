<?php

include_once('config.php');

$sql = "SELECT * FROM user";

$getUsers = $conn->prepare($sql);

$getUsers -> execute();

$user = $getUsers->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table, td, th {
        border: 1px solid black;
        }

        td, th {
            padding: 15px;
        }

        th {
            background-color: green;
        }
    </style>

    <table>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Password</th>
        </tr>

        <?php
        foreach($user as $nnn){
        ?>
        <tr>
        <td><?php echo $nnn['id'];?></td>
        <td><?php echo $nnn['username'];?></td>
        <td><?php echo $nnn['password'];?></td>
        <td><?= "<a href='delete.php?id=$nnn[id]'>Delete</a>"?></td>
        </tr>
        <?php }?>
        
    </table>
</body>
</html>