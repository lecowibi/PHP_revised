<?php
// setcookie("fav_food","pizza",time() -0,"/");
setcookie("fav_food","pizza",time()+ (86400*2),"/");
setcookie("fav_beverage","coke",time()+ (86400*3),"/");
setcookie("fav_desert","icecream",time()+ (86400*4),"/");
// foreach($_COOKIE as $key=>$value){
//     echo "{$key}={$value} <br>";
// }
if(isset($_COOKIE["fav_food"])){
    echo "you can buy some {$_COOKIE["fav_food"]}";
}
else{
    echo "i duuno your fav food";
}
?>