<?php
session_start();
if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
// foreach ($_SESSION["cart"] as $productId => $quantity) {
//         echo $productId." qty ".$quantity;
//     }
print_r($_SESSION["cart"]);
}else{
    echo "null";
}
// session_destroy();