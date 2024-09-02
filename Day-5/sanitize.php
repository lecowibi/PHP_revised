<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitize</title>
</head>

<body>
    <form action="sanitize.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username"><br><br>
        <label for="age">age</label>
        <input type="text" name="age"><br><br>
        <label for="email">email</label>
        <input type="email" name="email"><br><br>
        <input type="submit" name="login" value="login">
    </form>
</body>

</html>
<?php
if(isset($_POST["login"])){
    // sanitize
    // $username=$_POST["username"];
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    echo $username;
    $age=filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    echo $age;
    $email=filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
    echo $email;
    
}
?>