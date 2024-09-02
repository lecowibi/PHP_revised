<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello i am the home page</h1><br>
<h3>Here is the information about the homepage</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque non modi placeat nihil laboriosam quibusdam earum assumenda repellat autem, facilis minus aut omnis explicabo. Blanditiis impedit rem ea accusantium quam in eveniet officiis maiores aperiam animi praesentium fuga porro, ratione at quas vel id nostrum.
</p>

    <form action="homepage.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>
<?php
if (isset($_POST["logout"])){
    session_destroy();
    header("Location: login.php");
}
?>