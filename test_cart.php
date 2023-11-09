<?php
session_start();

// Check if a cart array exists in the session, initialize if not
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Add a product to the cart
if (isset($_POST['add_to_cart']) && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $_SESSION['cart'][$product_id] = isset($_SESSION['cart'][$product_id]) ? $_SESSION['cart'][$product_id] + 1 : 1;
}
?>

<!-- Product Listing -->
<ul>
    <li>
        Product 1 - $10
        <form method="post" action="">
            <input type="hidden" name="product_id" value="1">
            <input type="submit" name="add_to_cart" value="Add to Cart">
        </form>
    </li>
    <li>
        Product 2 - $20
        <form method="post" action="">
            <input type="hidden" name="product_id" value="2">
            <input type="submit" name="add_to_cart" value="Add to Cart">
        </form>
    </li>
    <!-- Add more products as needed -->
</ul>
<?php
session_start();

if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo "<h2>Your Shopping Cart</h2>";
    echo "<ul>";
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        echo "<li>Product ID: $product_id - Quantity: $quantity</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Your cart is empty.</p>";
}
?>
