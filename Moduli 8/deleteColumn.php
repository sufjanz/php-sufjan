<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=testnita", "root", "");

    $sql = "ALTER TABLE products DROP COLUMN name";

    $pdo->exec($sql);

    echo "column dropped successfully";

}catch(PDOExeption $e){
    echo "error dropping column: " . $e->getMessage();
}

?>