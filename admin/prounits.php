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
        <div class ="col-sm-3">
        </div>

        <div class="col-sm-6">
        <form role="form" action="prosetunitshandler.php" method="post" enctype="multipart/form-data">
        <?php 
$newid=$_GET['prounits_id'];

include ('../partials/connect.php');
$sql="select * from products where id='$newid'";
$results=$connect->query($sql);
$final=$results->fetch_assoc();
?>

          <h1>Products </h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Product Name"  value="<?php echo $final['name'] ?>" name="name">
                </div>
                <div class="form-group">
                  <label for="units">units</label>
                  <input type="text" class="form-control" id="units" placeholder="units" value="<?php echo $final['units'] ?>" name="units" >
                </div>
               
                
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" value="<?php echo $final['id'] ?>" name="form_id" name="form_id"  >
                <button type="submit" class="btn btn-primary" name="update">Update</button>
              </div>
            </form>
          </div>
          <div class="col-sm-3">
          </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include('adminpartials/footer.php')
?>
  </body>
</html>
