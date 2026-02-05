<?php


$myFile = fopen("reis.txt", "w");
$myFile = fopen("reis.txt", "r");

fclose($myFile);


$file = "modes.txt";

$readonly = fopen($file, "r");

$size = filesize($file);

$filedata = fread($readonly, $size);

echo $filedata;

$read = fopen("modes.txt", "r");

while(!feof($read)){
    echo fgets($read). "<br>";
}

fclose($read);

$write = fopen("nita.txt", "w");

$text = "Ne sot po mesojme per file manipulation";

fwrite($write, $text);

$hii = file_put_contents('test.txt', "This is the second text");

echo $hii;



?>