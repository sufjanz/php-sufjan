<?php

// phpinfo ();

// $x="hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii";
// $y=6.8;
// $z=66;
// print_r($x);

// echo gettype($x);
// echo gettype($y);
// echo gettype($z);

// function printha(){
//     echo "literally nothing".phpversion();
// }

// printha();

// function maximum($x, $y){
//     if($x>$y){
//         return $x;
//     }else{
//         return $y;
//     }
//     }

// $test maximum(100, 100);
// echo $test;


// function fully_divisble($n){
//     if(($n % 2)==0){
//         return "$n is fully divisible by 2!";
//     }else{
//         return "$n is not fully divisible by 2!";
//     }
// }

// print_r (fully_divisble(8) ."<hr>");

$x = 4;
function okay(){
    $y = 4;
    echo $y;
}

okay();
echo $x;

$sports = array("football", "basketball", "handball", "hockey");
$sporttt = ["gt3", "gt2", "gt4", "f1", "rally"];
$numm = array(34, 67, 12);

for($i=0; $i<4; $i++){
    echo $sports[$i], "<hr>";
}

//array_pop deletes the last element

array_pop($sports);

var_dump($sports);

//array_unshift adds an element at the beginning of the array
array_unshift($sports, 'zulu');

var_dump($sports). "<hr>";

//array_shift - deletes an element at the beginning of the array

array_shift($sports);

for($i=0; $i<3; $i++){
    echo $sports[$i], "<hr>";
}

//array sum
var_dump(array_sum($numm));

$var = [1,2,3,4,5,6];

$mesatarja = array_sum($var)/6;

echo $mesatarja;


// array nuuu array sum med
?>