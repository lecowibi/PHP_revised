<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function</title>
</head>
<body>
    <form action="mathFunction.php" method="post">
        <label for="X">X: </label>
        <input type="text" name="x">
        <label for="X">Y: </label>
        <input type="text" name="y">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
$x = $_POST["x"];
$y = $_POST["y"];
$total=null;
// $total = pi();provide you the exact value of pie 
// $total = rand($x,$y); choose you the random number between the given number you can also write it like $total = rand(1,10); it is same in power also
// $total = max($x,$y); provide you the maximum value of the given number
// $total = min($x,$y); provide you the minimum value of the given number
// $total = sqrt($x); work as square root 
// $total= pow($x,$y); for power where x is decided as number and y is decide as power
// $total = round($x); work like a math roundup mechanism
// $total = ceil($x); always increase the value if decimal is there
// $total = floor($x); always decrease the valur if decimal is there
// $total = abs($x); always provide you a positive value
echo $total;
?>