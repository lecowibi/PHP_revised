<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $username=$_POST["username"];
    // $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    echo $username;
}
?>