<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
</head>

<body>
    <form action="validate.php" method="post">

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
if (isset($_POST["login"])) {
    // $username=$_POST["username"];
    //     echo $username; 

    // validation for integer  
    // $age=filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
    // if(empty($age)){
    //     echo "Invalid number";
    // } 
    // else{
    //     echo "You are {$age} years old";
    // }

    // validation for email
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    if (empty($email)) {
        echo "Invalid email";
    } else {
        echo "you email is {$email}";
    }
}
?>