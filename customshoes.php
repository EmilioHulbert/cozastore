<!DOCTYPE html>
<html lang="en">
<?php 
	include("partials/head.php");
?>

<body class="animsition">
	
<?php
	include("partials/header.php");
?>

<br>

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
	<div class="container">
		<div class="flex-w flex-sb-m p-b-52">			
			
			<!-- Search product -->
			<div class="dis-none panel-search w-full p-t-10 p-b-15">
				<div class="bor8 dis-flex p-l-15">
					<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
				</div>	
			</div>

		</div>

		<!-- Filters -->
		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<!-- Category Dropdown -->
				<div class="filter-dropdown m-r-32 m-tb-5">
					<label for="category">Category:</label>
					<select id="category" name="category">
						<option value="all">All</option>
						<option value="hockey">Hockey</option>
						<option value="figure">Figure</option>
						<option value="inline">Inline</option>
					</select>
				</div>

				<!-- Size Dropdown -->
				<div class="filter-dropdown m-r-32 m-tb-5">
					<label for="size">Size:</label>
					<select id="size" name="size">
						<option value="all">All</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select>
				</div>

				<!-- Color Dropdown -->
				<div class="filter-dropdown m-r-32 m-tb-5">
					<label for="color">Color:</label>
					<select id="color" name="color">
						<option value="all">All</option>
						<option value="black">Black</option>
						<option value="white">White</option>
						<option value="red">Red</option>
						<option value="blue">Blue</option>
						<option value="green">Green</option>
					</select>
				</div>

				<!-- Top Shell Type Dropdown -->
				<div class="filter-dropdown m-r-32 m-tb-5">
					<label for="top-shell-type">Top Shell Type:</label>
					<select id="top-shell-type" name="top-shell-type">
						<option value="all">All</option>
						<option value="plastic">Plastic</option>
						<option value="leather">Leather</option>
						<option value="fabric">Fabric</option>
					</select>
				</div>

				<!-- Frame Type Dropdown -->
				<div class="filter-dropdown m-r-32 m-tb-5">
					<label for="frame-type">Frame Type:</label>
					<select id="frame-type" name="frame-type">
						<option value="all">All</option>
						<option value="metal">Metal</option>
						<option value="composite">Composite</option>
						<option value="carbon">Carbon</option>
					</select>
				</div>

				<!-- Wheel Size Dropdown -->
				<div class="filter-dropdown m-r-32 m-tb-5">
					<label for="wheel-size">Wheel Size:</label>
					<select id="wheel-size" name="wheel-size">
						<option value="all">All</option>
						<option value="50mm">50mm</option>
						<option value="55mm">55mm</option>
						<option value="60mm">60mm</option>
					</select>
				</div>

				<!-- Bearing Type Dropdown -->
				<div class="filter-dropdown m-r-32 m-tb-5">
					<label for="bearing-type">Bearing Type:</label>
					<select id="bearing-type" name="bearing-type">
						<option value="all">All</option>
						<option value="abec-5">ABEC 5</option>
						<option value="abec-7">ABEC 7</option>
						<option value="abec-9">ABEC 9</option>
					</select>
				</div>

				<!-- Boot Material Dropdown -->
				<div class="filter-dropdown m-r-32 m-tb-5">
					<label for="boot-material">Boot Material:</label>
					<select id="boot-material" name="boot-material">
						<option value="all">All</option>
						<option value="synthetic">Synthetic</option>
						<option value="canvas">Canvas</option>
						<option value="suede">Suede</option>
					</select>
				</div>
			</div>
		</div>

		<div class="row isotope-grid">
			<?php 
			include("partials/connect.php");
			$sql="select * from tradeinaccepted";
			$results=$connect->query($sql);

			while($final=$results->fetch_assoc()){
				// Set hard-coded prices based on conditions
				$price = 0;
				if ($final['category_id'] == 'hockey' && $final['size'] == '8') {
					$price = 3000; // Example price for Hockey and size 8
				} elseif ($final['category_id'] == 'figure' && $final['color'] == 'red') {
					$price = 2500; // Example price for Figure and red color
				} else {
					$price = $final['price']; // Default price from the database
				}
			?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id']?> ">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="handler/<?php echo $final['picture']?>" alt="IMG-PRODUCT" style="min-height: 400px; max-height: 400px">
							<a href="secondhandshoesdetails.php?details_id=<?php echo $final['id']?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ">
								Quick View
							</a>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l">
								<a href="details.php?details_id=<?php echo $final['id']?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?php echo $final['name']?>
								</a>
								<span class="stext-105 cl3">
									KSH <?php echo $price; ?>
								</span>
							</div>
							<div class="block2-txt-child2 flex-r p-t-3">
								<form action="add_to_cart.php" method="POST">
									<input type="hidden" name="product_id" value="<?php echo $final['id']; ?>">
									<input type="hidden" name="product_name" value="<?php echo $final['name']; ?>">
									<input type="hidden" name="product_price" value="<?php echo $price; ?>">
									<button type="submit" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
										<img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-01.png" alt="ICON">
										<img class="icon-heart2 dis-block trans-04 ab-t-l" src="images/icons/icon-heart-02.png" alt="ICON">
										Add to Cart
									</button>
								</form>
							</div>
						</div>
					</div>
				</div> 
			<?php } ?>
		</div>

		<!-- Proceed to Cart Button -->
		<div class="text-center">
			<a href="cart.php" class="btn btn-primary stext-102 cl0 size-102 bg1 bor1 hov-btn1 p-lr-15 trans-04">
				Proceed to Cart
			</a>
		</div>
	</div>
</div>

<?php
include('partials/footer.php');
?>

</body>
</html>
