i mean this is the secondhandshoes.php file <!DOCTYPE html>
<html lang="en">
<?php 
	include("partials/head.php");
?>

<body class="animsition">
	
<?php
	include("partials/header.php");
?>

		

	<!-- breadcrumb -->
	<div class="container">
		
	</div>
		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
			<?php 
				include("partials/connect.php");
				$id=$_GET['details_id'];
				$sql="Select * from tradeinaccepted";
				$results=$connect->query($sql);
				$final=$results->fetch_assoc();

				?>
			
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="handler/<?php echo $final['picture']?>">
									<div class="wrap-pic-w pos-relative">
										<img src="handler/<?php echo $final['picture']?>" alt="IMG-PRODUCT" style="min-height: 400px;max-height: 400px">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="handler/<?php echo $final['picture']?>" style="min-height: 400px;max-height: 400px">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<!-- <div class="item-slick3" data-thumb="<?php echo $final['picture2']?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?php echo $final['picture2']?>" alt="IMG-PRODUCT" style="min-height: 400px;max-height: 400px">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $final['picture2']?>" style="min-height: 400px;max-height: 400px">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

								<div class="item-slick3" data-thumb="<?php echo $final['picture3']?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?php echo $final['picture3']?>" alt="IMG-PRODUCT" style="min-height: 400px;max-height: 400px">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="<?php echo $final['picture3']?>" style="min-height: 400px;max-height: 400px">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div> -->
						</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $final['name']?>
						</h4>

						<span class="mtext-106 cl2">
						KSH <?php echo $final['price']?>
						</span>

						<p class="stext-102 cl3 p-t-23">
							<?php echo $final['description']?>
						</p>
						<!--  -->
						<div class="p-t-33">
						
						
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									
									<button type="button" onclick="addToCart()" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>	
		 				</div>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">
							
							<a href="https://www.facebook.com" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="https://www.twitter.com" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
								<i class="fa fa-twitter"></i>
							</a>

							<a href="https://www.googleplus.com" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
									<?php echo $final['description']?>
								</p>
							</div>
						</div>

						<!-- - -->
					
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: SKT- OWNER 2
			</span>

			<span class="stext-107 cl6 p-lr-25">
				Categories: Second Hand /Used Shoes
			</span>
		</div>
	</section>


	<!-- Related Products -->
	

	<!-- Footer -->
<?php
include ('partials/footer.php');
?>

<script>
	document.getElementById('minus-btn').addEventListener('click', function() {
		var qtyInput = document.getElementById('qty');
		var qty = parseInt(qtyInput.value);
		if (qty > 1) {
			qtyInput.value = qty - 1;
		}
	});

	document.getElementById('plus-btn').addEventListener('click', function() {
		var qtyInput = document.getElementById('qty');
		var qty = parseInt(qtyInput.value);
		qtyInput.value = qty + 1;
	});

	function addToCart() {
		var cartId = "<?php echo $final['id']; ?>";
		var cartName = "<?php echo $final['name']; ?>";
		var cartPrice = "<?php echo $final['price']; ?>";
		var url = "carthandler.php?cart_id=" + cartId +  cartName + cartPrice;
		location.href = url;
	}
</script>



</body>
</html>