<?php

if ($_POST) {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    switch ($_POST["opera"]) {
        case 1:
            echo ($num1+$num2);
            break;
        case 2:
            echo ($num1-$num2);
            break;
        case 3:
            echo ($num1/$num2);
            break;
        case 4:
            echo ($num1*$num2);
            break;
        default :
            break;
    }
} else {
    header("location: .././");
}