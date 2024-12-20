



<!DOCTYPE html>
<html lang="en">
<?php 
  include("partials/head.php");
  include("partials/connect.php");
?>

<body class="animsition">
  
<?php
  include("partials/header.php");

?>

    


  <!-- Title page -->
  <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/about1.jpg')">
    <h2 class="ltext-105 cl0 txt-center">
    View The List Of Rejected Trade IN's
    </h2>
  </section>  


  <!-- Content page -->
  <section class="bg0 p-t-104 p-b-116">
    <div class="container">
      <div class="flex-w flex-tr">
        <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
        

<?php 

$id=$_GET['pro_id'];
$sql="select * from declinedtradein where id='$id'";
$results=$connect->query($sql);
$final=$results->fetch_assoc();

?>
<h3>Name: <?php echo $final['name']?></h3><hr><br>
<h3>Contact Email: <?php echo $final['email']?></h3><hr><br>
<h3>Description: <?php echo $final['description']?></h3><hr><br>
<img src="handler/<?php echo $final['picture']?>" alt="No File" style="height:300; width:300px"><br><br>  
<h3>Price Valued At: KSH <?php echo $final['price']?></h3><hr><br>




        </div>


          <div class="col-sm-3">
          </div>

    </section>
    <!-- /.content -->
  </div>
        </div>

        <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
       
        </div>
      </div>
    </div>
  </section>  
  
  
  <!-- Map -->
  <div class="map">
    <div class="size-303" id="google_map" data-map-x="40.691446" data-map-y="-73.886787" data-pin="images/icons/pin.png" data-scrollwhell="0" data-draggable="1" data-zoom="11"></div>
  </div>



  <!-- Footer -->
<?php 
include("partials/footer.php");
?>

</body>
</html>























