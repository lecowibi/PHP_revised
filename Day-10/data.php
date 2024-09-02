<?php
include("db.php");
$sql = "SELECT * FROM registrationformprj ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
   while( $row =mysqli_fetch_assoc($result)){
    echo " <b>ID:</b> {$row["id"]} <br>";
    echo " <b>Username:</b> {$row["username"]} <br>";
    echo " <b>Paswword:</b> {$row["password"]} <br> <br>";
   }
   
}

mysqli_close($conn);
?>