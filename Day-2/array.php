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
//array withj the collection of food
$food = array("momo", "KFC", "Chowmein", "Sausage");
// array_push($food, "Thakali", "French Fries"); adding data to a existing array
// array_pop($food); removing data from the existing array from behind
// array_shift($food);removind data from the existing array from front
// $foods=array_reverse($food); reversing the given array
// displaying all the array in one line of code instead of giving instruction to each data
foreach($food as $foods){ 
    echo "{$foods} <br>";
}
// echo $foods[1]; calling the data of array individually
// echo count($food); counting the number of array
?>