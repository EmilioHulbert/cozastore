<!DOCTYPE html>
<html>
<?php
  include('adminpartials/session.php');
  include('adminpartials/head.php');
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
?>
  <!-- Left side column. contains the logo and sidebar -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-9">
          <?php 
          include("../partials/connect.php");

          $id = $_GET['pro_id'];
          
          // Fetch order details
          $sql = "SELECT * FROM orders WHERE id='$id'";
          $results = $connect->query($sql);

          if ($results && $results->num_rows > 0) {
              $final = $results->fetch_assoc();
          ?>
          <h3>CustomerNo: <?php echo htmlspecialchars($final['customer_id']); ?></h3><hr><br>
          <h3>Customer Telephone: <?php echo htmlspecialchars($final['phone']); ?></h3><hr><br>
          <h3>Customer Paid Via: <?php echo htmlspecialchars($final['pay_method']); ?></h3><hr><br>
          <h3>Total: <?php echo htmlspecialchars($final['total']); ?></h3><hr><br>
          <h3>Address: <?php echo htmlspecialchars($final['address']); ?></h3><hr><br>
          <?php
          } else {
              echo "<h3>No order found with ID: $id</h3>";
          }
          ?>
        </div>

        <div class="col-sm-9">
          <?php 
          // Fetch order details
          $sql = "SELECT * FROM order_details WHERE order_id='$id'";
          $results = $connect->query($sql);

          if ($results && $results->num_rows > 0) {
          ?>
          <table>
              <tr>
                  <th>ProductNo</th>
                  <th>Quantity</th>
              </tr>
              <?php while ($row = $results->fetch_assoc()) { ?>
              <tr>
                  <td><?php echo htmlspecialchars($row['product_id']); ?></td>
                  <td><?php echo htmlspecialchars($row['quantity']); ?></td>
              </tr>
              <?php } ?>
          </table>
          <?php
          } else {
              echo "<h3>No order details found for order ID: $id</h3>";
          }
          ?>
        </div>

        <div class="col-sm-3"></div>

      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
include('adminpartials/footer.php');
?>
  </body>
</html>
