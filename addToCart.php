<?php
session_start();

if (isset($_POST["product_id"])) {
    $productId = $_POST["product_id"];
    $qty = $_GET['qty'];
    // Store cart data in session
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }

    if (!isset($_SESSION["cart"][$productId])) {
        $_SESSION["cart"][$productId] = $qty; // Quantity
    } else {
        $_SESSION["cart"][$productId] = $_SESSION["cart"][$productId]+$qty;
    }
}
