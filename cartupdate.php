<?php
require('includes/common.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure session is started
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['customerid'])) {
        header('location: login.php');
        exit();
    }

    // Get the user ID from the session
    $user_id = $_SESSION['customerid'];

    // Get the quantities from the POST request
    $quantities = $_POST['quantity'];

    // Loop through each item and update the quantity
    foreach ($quantities as $item_id => $quantity) {
        // Sanitize the inputs
        $item_id = intval($item_id);
        $quantity = intval($quantity);

        if ($quantity > 0) {
            // Update the quantity in the database
            $query = "UPDATE users_products SET quantity = '$quantity' WHERE user_id = '$user_id' AND item_id = '$item_id' AND status = 'Added To Cart'";
            $result = mysqli_query($con, $query);

            // Check for errors
            if (!$result) {
                die('Error updating quantity: ' . mysqli_error($con));
            }
        }
    }

    // Redirect back to the cart page
    header('location: cart.php');
    exit();
}
?>
