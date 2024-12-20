
<?php 

session_start();
require("includes/common.php");

// start session check
if(empty($_SESSION['email']) || empty($_SESSION['password'])){
    echo "<script>
        alert('You need to login first Before Adding Items To Cart !');
        window.location.href='customerforms.php';
        </script>";
    // header('location: customerforms.php');
}
// end session check

// put details to users table   
if (isset($_GET['cart_id']) && is_numeric($_GET['cart_id'])) {
    $item_id = $_GET['cart_id'];
    $user_id = $_SESSION['customerid'];
    $quantity = $_GET['cart_quantity'];
    $size = $_GET['cart_size'];
    $color = $_GET['cart_color'];
    $query = "INSERT INTO users_products(user_id, item_id, status, quantity, size, color) VALUES('$user_id', '$item_id', 'Added to cart', '$quantity', '$size', '$color')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: cart.php');
}
?>
