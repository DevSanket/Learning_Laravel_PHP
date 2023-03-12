<?php 

require __DIR__ . '/vendor/autoload.php';
use Cocur\Slugify\Slugify;

$slugify = new Slugify();
echo $slugify->slugify('The Sky is Blue and the grass is green!!!');


// $catsName = "Meowsalot";
// echo "The name of the cat is $catsName and that is the truths. \n\n hello";

// function doubleMe($x){
//     return $x * 2;
// }

// function tripleMe($x){
//     return $x * 3;
// }

// $ourCoolNumber = tripleMe(doubleMe(6));

// if($ourCoolNumber > 200){
//     echo "This Number is Large enought";
// }else{
//     echo "The Number is Not Large enought";
// }



?>

