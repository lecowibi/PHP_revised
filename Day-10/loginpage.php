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
<?php
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username)){
        echo "Please Enter Username";
    }
    elseif(empty($password)){
        echo "Please Enter Password";
    }
    else{
        $hash= password_hash($password,PASSWORD_DEFAULT);
        $sql ="INSERT INTO registrationformprj(username,password) VALUES ('$username','$hash')";
        try{
            mysqli_query($conn,$sql);
            echo "You form are submitted succesfully";
        }
       catch(mysqli_sql_exception){
        echo "The username is already taken";
       }
    }
}
    mysqli_close($conn);
?>