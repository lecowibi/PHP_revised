<!-- isset return true if the variable is declared and not null -->
<!-- Empty return true if the variable is not declared , false,null, "" -->


<!-- isset
   <?php
    $username = "Bishal";
    if (isset($username)) {
      echo "This variable  is set";
    } else {
      echo "This variable is not set";
    }
    ?> -->
<!-- Empty
 <?php
  $username = null;
  if (empty($username)) {
    echo "This variable  is empty";
  } else {
    echo "This variable is not empty";
  }
  ?> -->
  <!-- simple login project using isset and empty  -->
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   </head>
   <body>
    <form action="issetEmpty.php" method="post">
      <label for="username">Username:</label><br>
      <input type="text" name="username"><br>
      <label for="password">Password:</label><br>
      <input type="password" name="password"><br><br>
      <input type="submit" name="submit" value="Login">
    </form>
   </body>
   </html>
   <?php
  //  foreach($_POST as $key=>$value){
  //   echo" {$key}={$value}<br>";
  //  }
  if(isset($_POST["submit"])){
    if(empty($_POST["username"])){
      echo "Username is missing";
    }
    else if(empty($_POST["password"])){
      echo "Password is missing";
    }
    else{
      echo "You are welcome to my page";
    }
  }
   ?>