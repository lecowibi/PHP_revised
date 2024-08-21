<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="workwithCheckbox.php" method="post">
        <input type="checkbox" name="food[]" Value="Pizza">Pizza<br>
        <input type="checkbox" name="food[]" Value="Burger">Burger<br>
        <input type="checkbox" name="food[]" Value="frenchfry">frenchfry<br>
        <input type="checkbox" name="food[]" Value="Chicken">Chicken<br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <!-- <form action="index.php" method="post">
        <input type="checkbox" name="pizza" Value="Pizza">Pizza<br>
        <input type="checkbox" name="burger" Value="Burger">Burger<br>
        <input type="checkbox" name="frenchfry" Value="frenchfry">frenchfry<br>
        <input type="checkbox" name="chicken" Value="Chicken">Chicken<br>
        <input type="submit" name="submit" value="Submit">
    </form> -->
</body>

</html>
<?php
if (isset($_POST["submit"])){
    $foods=$_POST["food"];
    foreach($foods as $food){
        echo $food;
    }
    
}
            // using if else 

// if (isset($_POST["submit"])) {
//     if (isset($_POST["pizza"])) {
//         echo "You like pizza";
//     }
//     else if(empty($_POST["pizza"])){
//         echo "You don't like pizza";
//     }
//     if (isset($_POST["burger"])) {
//         echo "You like burger";
//     }
//     else if(empty($_POST["burger"])){
//         echo "You don't like burger";
//     }
//     if (isset($_POST["frenchfry"])) {
//         echo "You like frenchfry";
//     }
//     else if(empty($_POST["frenchfry"])){
//         echo "You don't like frenchfry";
//     }
//     if (isset($_POST["chicken"])) {
//         echo "You like chicken";
//     }
//     else if(empty($_POST["chicken"])){
//         echo "You don't like chicken";
//     }
// }
?>