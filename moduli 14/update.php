<?php
include_once('config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);
$user = $stmt->fetch();
?>

<form method="POST" action="update.php">
    <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">

    <input type="text" name="your_name" value="<?php echo $user['name']; ?>">
    <input type="text" name="your_surname" value="<?php echo $user['surname']; ?>">
    <input type="email" name="your_email" value="<?php echo $user['email']; ?>">

    <input type="password" name="your_pass" placeholder="New Password">
    <input type="password" name="your_pass_repeat" placeholder="Repeat Password">

    <button type="submit" name="update">Update</button>
</form>