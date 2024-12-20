<!DOCTYPE html>
<html lang="en">
<?php 
    include("partials/head.php");
?>
<body class="animsition">
<?php
    include("partials/header.php");
?>
<!-- Shopping Cart -->
<div class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <?php
                        require('includes/common.php');
                        $sum = 0;
                        $user_id = $_SESSION['customerid'];
                        $query = "SELECT products.price AS Price, products.id, products.name AS Name, users_products.quantity AS Quantity FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) >= 1) {
                        ?>
                        <form action="cartupdate.php" method="POST">
                            <table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">ID</th>
                                    <th class="column-2">Name</th>
                                    <th class="column-3">Price</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                    <th class="column-6">Action</th>
                                </tr>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $item_price = $row["Price"];
                                    $item_id = $row["id"];
                                    $item_name = $row["Name"];
                                    $quantity = $row["Quantity"];
                                    $total_price = $item_price * $quantity;
                                    $sum += $total_price;
                                    echo "<tr>
                                            <td class='column-1'>#{$item_id}</td>
                                            <td class='column-2'>{$item_name}</td>
                                            <td class='column-3'>KSH {$item_price}</td>
                                            <td class='column-4'>
                                                <div class='wrap-num-product flex-w m-r-20 m-tb-10'>
                                                    <div class='btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m'>
                                                        <i class='fs-16 zmdi zmdi-minus'></i>
                                                    </div>
                                                    <input type='number' name='quantity[{$item_id}]' class='mtext-104 cl3 txt-center num-product' value='{$quantity}' maxlength='9'>
                                                    <div class='btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m'>
                                                        <i class='fs-16 zmdi zmdi-plus'></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class='column-5'>KSH {$total_price}</td>
                                            <td class='column-6'>
                                                <a href='cart-remove.php?id={$item_id}' class='remove_item_link'>Remove</a>
                                            </td>
                                          </tr>";
                                }
                                echo "<tr><td></td><td></td><td></td><td>Total</td><td>KSH {$sum}</td><td></td></tr>";
                                ?>
                            </table>
                            <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                                <div class="flex-w flex-m m-r-20 m-tb-5">
                                    <input type="submit" value="Update Cart" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                </div>
                            </div>
                        </form>
                        <?php
                        } else {
                            echo "<div class='empty-cart-container'>
                                    <img src='images/emptycart.png' class='image-fluid' height='150' width='150'>
                                    <div class='text-bold h5'>Your cart is currently empty!</div>
                                    <a href='product.php' class='flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer m-t-20'>Shop Now</a>
                                  </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Cart Totals
                    </h4>
                    <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                Subtotal:
                            </span>
                        </div>
                        <div class="size-209">
                            <span class="mtext-110 cl2">
                                <?php echo "KSH $sum"; ?>
                            </span>
                        </div>
                    </div>
                    <button onclick="location.href='cart2.php'" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('partials/footer.php');
?>
</body>
</html>
