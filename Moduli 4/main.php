<?php
// $hahaa = "hahaaaa";

// switch($hahaa){
//         case 'haha' :
//         echo strlen($hahaa);
//         break;

//         case 'hahaa' :
//         echo strlen($hahaa);
//         break;

//         case 'hahaaa' :
//         echo strlen($hahaa);
//         break;

//         case 'hahaaaa' :
//         echo strlen($hahaa);
//         break;

//         case 'hahaaaaa' :
//         echo strlen($hahaa);
//         break;

//         case 'hahaaaaaa' :
//         echo strlen($hahaa);
//         break;

//         case 'hahaaaaaaa' :
//         echo strlen($hahaa);
//         break;

//     default :
//         echo  "Invalid Text";
//         break;
// }

$numration = 0;
while($numration <= 8){
    echo "number is smaller than $numration <hr>";
    $numration++;
}


$numration = 0;
do{
    echo "number is smaller than $numration <hr>";
    $numration++;
}while($numration <= 8);

for($x=0; $x<=8; $x=++){
    echo "number is smaller than $x <hr>";
}

?>

