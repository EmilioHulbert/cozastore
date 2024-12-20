<!DOCTYPE html>
<html lang="en">
<?php 
	include("partials/head.php");
?>

<body class="animsition">
	
<?php
	include("partials/header.php");

?>

		


	<!-- Title page -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/about1.jpg')">
		<h2 class="ltext-105 cl0 txt-center">
			We Accept Trade In Options
		</h2>
	</section>	


	<!-- Content page -->
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
			<div class="flex-w flex-tr">
				<div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
					<form role="form" action="handler/tradeinhandler.php" method="post" enctype="multipart/form-data">
						<h4 class="mtext-105 cl2 txt-center p-b-30">
						Details Page
						</h4>

 					 <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
                </div>
                 <div class="form-group">
                  <label for="picture">Upload skate shoe Image</label>
                  <input type="file" id="picture" name="file">
                </div>

						<div class="bor8 m-b-20 how-pos4-parent">
							<input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" id="email" type="text" name="email" placeholder="Your Reachable Email Address">
							<img class="how-pos4 pointer-none" src="images/icons/icon-email.png" alt="ICON">
						</div>

						<div class="bor8 m-b-30">
							<textarea class="stext-111 cl2 plh3 size-120 p-lr-28 p-tb-25" name="description" id="description" placeholder="Insert your skate shoe details here"></textarea>
						</div>

					 <div class="form-group">
                  <label for="price">Price Valued at in KSH:</label>
                  <input type="text" class="form-control" id="price" placeholder="Enter Amount Valued at" name="price">
                </div>
						<button class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
							Submit
						</button>
					</form>
				</div>

				<div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<!-- <span class="lnr lnr-map-marker"></span> -->
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
							INSTRUCTIONS
							</span>

							<p class="stext-115 cl6 size-213 p-t-18">
								Give Us A detailed explanation of the duration you have used your skate shoe,and for what price you value it 
								currently at and the product or new skate shoe you intend to trade it for to lower your purchasing price,and also together remember to attach a clear photo of the shoe in the form.It takes about 24 hours before we can reply to your trade in request.

							</p>
						</div>
					</div>

					<div class="flex-w w-full p-b-42">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-phone-handset"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Lets Talk
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								+254784960420
							</p>
						</div>
					</div>

					<div class="flex-w w-full">
						<span class="fs-18 cl5 txt-center size-211">
							<span class="lnr lnr-envelope"></span>
						</span>

						<div class="size-212 p-t-2">
							<span class="mtext-110 cl2">
								Sale Support
							</span>

							<p class="stext-115 cl1 size-213 p-t-18">
								emiliohulbert2017@gmail.com
							</p>
						</div>
					</div>
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