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

        form>input{
            margin: 10px;
            font-size: 20px;
            padding: 5px;
        }
        button{
            border: 1px solid black;
            padding: 10px 30px;
            font-size: 20px;
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


    <form>
        <input type="hidden" name="id" value="<?php echo user[$id] ?>"><br>
        <input type="hidden" name="username" value="<?php echo user[$username] ?>"><br>
        <input type="hidden" name="password" value="<?php echo user[$password] ?>"><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>