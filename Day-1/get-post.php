<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get_Post</title>
</head>
<body>
    <form action="get-post.php" method="POST">
    <label for="Name">Name</label>
        <input type="text" name="name">
    <label for="Name">password</label>
        <input type="password" name="password">
        <input type="submit" value="login">
    </form>
</body>
</html>
<?php
echo "{$_POST["name"]}<br>";
echo $_POST["password"];
?>