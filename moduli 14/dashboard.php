<?php
include_once('config.php');

$sql = "SELECT * FROM users";
$getUsers = $conn->prepare($sql);
$getUsers->execute();
$user = $getUsers->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        table, td, th {
            border: 1px solid black;
        }
        td, th {
            padding: 10px;
        }
        th {
            background-color: green;
            color: white;
        }
        a {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
    </tr>

    <?php foreach($user as $u){ ?>
    <tr>
        <td><?php echo $u['id']; ?></td>
        <td><?php echo $u['name']; ?></td>
        <td><?php echo $u['surname']; ?></td>
        <td><?php echo $u['email']; ?></td>
        <td>******</td>
        <td>
            <a href="update.php?id=<?php echo $u['id']; ?>">Edit</a>
            <a href="delete.php?id=<?php echo $u['id']; ?>" 
               onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php } ?>

</table>

</body>
</html>