<?php
$password="bishal123";
$hash=password_hash($password,PASSWORD_DEFAULT);
// echo $hash;
if(password_verify("bishal123",$hash)){
    header("Location:home.php");
}
else{
    echo "incorrect Password! Please Try again ";
}
?>