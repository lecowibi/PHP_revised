<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital city</title>
</head>
<body>
<form action="capitalCity.php" method="post">
<label for="country">Enter a country</label>
    <input type="text" name="country">
    <input type="submit" value="Submit">
</form>
</body>
</html>
<?php
$capital=array("USA"=>"Washington DC",
                "Japan"=>"Kyota",
                "Korea"=>"Seoul",
                "India"=>"New Dehli",            
                "Nepal"=>"Kathmandu"
);
$capitals=$capital[$_POST["country"]];
echo "<b>{$capitals}</b>";
?>