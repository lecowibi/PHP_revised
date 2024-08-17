<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Total</title>
</head>
<body>
    <form action="pizzaTotal.php" method="post">
    <label for="quantity">Quantity:</label>
    <input type="text" name="quantity"><br><br><br>
    <input type="submit" value="Total">
    </form>
</body>
</html>
<?php
$name = "Pizza";
$price = 499;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;
echo "You have ordered {$quantity} {$name}<br>";
echo "<b>Total: </b>{$total}";
?>