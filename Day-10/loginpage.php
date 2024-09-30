<?php
include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <h2>
            Fill up your form
        </h2>
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password" ><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
