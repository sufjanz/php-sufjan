<?php

include_once('config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM products WHERE id=:id";

$prep = $conn->prepare($sql);

$prep->bindParam(':id', $id);

$prep->execute();

$data = $prep->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
</head>
<body>
        <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>"><br>
        <input type="text" name="name" value="<?php echo $data['name'] ?>"><br>
        <input type="text" name="price" value="<?php echo $data['price'] ?>"><br>
        <input type="text" name="description" value="<?php echo $data['description'] ?>"><br>

        <button type="submit" name="update">UPDATE</button>

    </form>
    
</body>
</html>