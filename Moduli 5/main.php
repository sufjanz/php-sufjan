<?php


$dogs = array(
    array("Kangal", "Turkey", 8),
    array("Cane Corso", "Italy", 12),
    array("K9", "Belgium", 4)
);


echo $dogs[0][0]. " Origin: ". $dogs[0][1]. " Age: ". $dogs[0][2]. "<hr>";
echo $dogs[1][0]. " Origin: ". $dogs[1][1]. " Age: ". $dogs[1][2]. "<hr>";
echo $dogs[2][0]. " Origin: ". $dogs[2][1]. " Age: ". $dogs[2][2]. "<hr>";

for($x = 0; $x<3; $x++){
    echo "<ul>";
    for($y = 0; $y<3; $y++){
        echo "<li>". $dogs[$x][$y]. "</li>";
    }
    echo "</ul>";
}

?>

<html>


<table>
    <tr>
        <th>Phone</th>
        <th>In Stock</th>
        <th>Sold</th>
    </tr>


<style>
    table {
        width: 500px;
    }
    th, td{
        padding: 10px;
        text-align: center;
        border: 1px solid black;
    }
    th {
        background-color: aquamarine;
        font-weight: bold;
    }
</style>

<?php

$phones = array (
    array("iPhone 17", 20, 13),
    array("iPhone 13", 400, 2),
    array("iPhone 15", 32, 30),
    array("iPhone 16", 21, 20)
);

for($row = 0; $row<4; $row++){
    echo "<tr>";
    for($col = 0; $col<3; $col++){
        echo "<td>" .$phones[$row][$col] ."</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>
</table>


</html>

<?php

$arianita = [
    "math"=>"3",
    "art"=>"5",
    "histori"=>"4",
    "music"=>"2"
];


echo "Math grade is ". $arianita['math'];

foreach($arianita as $subject => $arianita){
    echo "Subject: ". $arianita. " Grade: ". $subject. "<hr>";
}


?>