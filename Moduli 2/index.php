<?php

$name = "s";
$surname = "z";

$username = $name.$surname;

echo $username. "<hr>"; 

$theString = "Jora Vula";
echo strlen($theString). "<hr>";

$string = "String";
echo str_word_count ($string). "<hr>";

$str = "b58 has 360hp";
echo str_replace ("360hp", "340hp", $str). "<hr>";

$str11 = "b58 has 360hp";
echo strrev ($str11). "<hr>";

?>