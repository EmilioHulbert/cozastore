<?php 
session_start();
include ('../partials/connect.php');

$total = $_POST['sum'];
$phone = $_POST['phone'];
$address = $_POST['address'];         
$customerid = $_SESSION['customerid'];
$payment = $_POST['payment'];

// Insert order into orders table
$sql = "INSERT INTO orders (customer_id, address, phone, total, pay_method) VALUES ('$customerid', '$address', '$phone', '$total', '$payment')";  
$connect->query($sql);

// Get the last inserted order ID
$sql2 = "SELECT id FROM orders ORDER BY id DESC LIMIT 1";
$result = $connect->query($sql2);
$final = $result->fetch_assoc();
$orderid = $final['id'];

// Retrieve cart data from users_products table
$sql3 = "SELECT * FROM users_products WHERE user_id='$customerid' AND status='Added to cart'";
$cart_result = $connect->query($sql3);

// Insert each cart item into order_details table
while ($row = $cart_result->fetch_assoc()) {
    $proid = $row['item_id'];
    $quantity = $row['quantity'];
    $size = isset($row['size']) ? $row['size'] : null; // Assuming size and color are optional
    $color = isset($row['color']) ? $row['color'] : null;

    $sql4 = "INSERT INTO order_details (order_id, product_id, quantity, size, color) VALUES ('$orderid', '$proid', '$quantity', '$size', '$color')";
    $connect->query($sql4);
}

// Update the status of the cart items to 'Ordered'
$sql5 = "UPDATE users_products SET status='Ordered' WHERE user_id='$customerid' AND status='Added to cart'";
$connect->query($sql5);

if ($payment == "paypal") {
    $_SESSION['total'] = $total;
    header('location: paypal.php');
} elseif ($payment == "mpesa") {
    $_SESSION['total'] = $total;
    header('location: mpesa/index.php');
} else {
    echo "<script>
    alert('ORDER IS PLACED');
    window.location.href='../index.php';
    </script>";
}
?>
