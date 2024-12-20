<?php
session_start();

// Debug: Check if form data is being received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price'])) {
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];

        // Initialize cart if not already set
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Check if the item already exists in the cart
        $item_exists = false;
        foreach ($_SESSION['cart'] as &$item) {
            if ($item['id'] == $product_id) {
                $item_exists = true;
                break;
            }
        }

        // Add item to cart if it does not already exist
        if (!$item_exists) {
            $_SESSION['cart'][] = array(
                'id' => $product_id,
                'name' => $product_name,
                'price' => $product_price
            );
        }

        // Redirect to cart page or back to the previous page
        header("Location: cart.php");
        exit();
    } else {
        echo "Error: Missing form data.";
    }
} else {
    echo "Invalid request method.";
}
?>
