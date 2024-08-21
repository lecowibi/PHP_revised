<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="workwithRadio.php" method="post">
        <input type="radio" name="credit_card" value="VISA">Visa<br>
        <input type="radio" name="credit_card" value="MasterCard">MasterCard<br>
        <input type="radio" name="credit_card" value="AmericanExpress">American Express<br>
        <input type="submit" value="confirm" name="confirm">
    </form>
</body>

</html>
<?php
// if (isset($_POST["confirm"])) {
//     if (isset($_POST["credit_card"])) {
//         $credit_card = $_POST["credit_card"];
//         echo $credit_card;
//     }
//     else{
//         echo "Please make a selection";
//     }
// }

// if (isset($_POST["confirm"])){
//     $credit_card=null;
//     if(isset($_POST["credit_card"])){
//         $credit_card=$_POST["credit_card"];
//     }
//     if($credit_card=="VISA"){
//         echo "You select a VISA ";
//     }
//     elseif($credit_card=="MasterCard"){
//         echo "You select a MasterCard ";
//     }
//     elseif($credit_card=="AmericanExpress"){
//         echo "You select a Amercan Express  ";
//     }
//     else{
//         echo "Make a selection";
//     }
// }

// alternative way
if (isset($_POST["confirm"])){
        $credit_card=null;
        if(isset($_POST["credit_card"])){
            $credit_card=$_POST["credit_card"];
        }
        switch($credit_card){
            case "VISA":
                echo "You selected the VISA";
                break;
                case "MasterCard":
                    echo "You selected the MasterCard";
                    break;
                    case "AmericanExpress":
                        echo "You selected the AmericanExpress";
                        break;
                        default:
                        echo "Please make an selection";
        }
    }
?>