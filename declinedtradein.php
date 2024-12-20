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

$sql="select * from declinedtradein";;
$results=$connect->query($sql);
while ($final=$results->fetch_assoc()){ ?>
  
  <a href="declinedtradeinshow.php?pro_id=<?php echo $final['id']?>">
  <h3><?php echo $final['id'] ?>: <?php echo $final['name']?> </h3><br>

</a>
<hr> 

<?php } 

?>

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