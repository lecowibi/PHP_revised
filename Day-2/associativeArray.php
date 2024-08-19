<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$food = array("momo"=>"wheat", "KFC"=>"Chicken", "Chowmein"=>"wheat", "Sausage"=>"chicken");
// $food["momo"]="buff"; modifying the existing array
// $food["sadeko"]="noodles"; adding new item to array like push
// array_pop($food); 
// array_shift($food);
// $keyfeature=array_keys($food); only extracting the key from the array associative
// $valuefeature=array_values($food); onle extracting the value from the array associative 
// $foods=array_flip($food); changing the key and value item 
// foreach($valuefeature as $value){
//     echo "{$value} <br>";
// }
foreach($food as $key=>$value){
    echo "{$key}={$value} <br>";
}
// echo $food["momo"];
?>