<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">                 self calling the action method-->
    <form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
        <label for="username">Username:</label><br>
        <input type="text" name="username"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php 
foreach($_SERVER as $key=>$value){
    echo"{$key} = {$key}<br>";
}
// reliable request method
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     echo "Hello";
// }
?>