	<?php 
						if(!empty($_SESSION['email'])) {
						if (!empty($_SESSION['cart']))  {
							$qty=count($_SESSION['cart']); ?>
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="<?php echo $qty?>"> 

						<?php }else{ ?>
						

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='customerforms.php'" data-notify="0">
					<?php }?>















					<?php
						
						if (!empty($_SESSION['cart']))  {
							$qty=count($_SESSION['cart']); ?>
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="<?php echo $qty?>"> 
									<?php }else{?>
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='customerforms.php'" data-notify="0">
						<?php }?>








						my own working header

							
					<?php 
						if(!empty($_SESSION['email'])) {
						 if (!empty($_SESSION['cart']))  {
							$qty=count($_SESSION['cart']); ?>
							<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='cart.php'" data-notify="<?php echo $qty?>"> 
								

						<?php }}else{ ?>
						
						

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti " onclick="location.href='customerforms.php'" data-notify="0">

					<?php }?>
