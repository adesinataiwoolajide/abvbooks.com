<?php
session_start();
require_once("../../dev/autoload.php");
$sku = General::sanitiseInput($_GET['sku']);
$product = new Products;
$product->sku = $sku;
$getDetails = $product->getSingleProductWithSku2();
foreach ($getDetails as $details) { ?>

		<div class="modal-left">
			<img src="images/large/<?php echo $details['largepic'];?>">	
			<h4><b>NAME: </b></h4>
			<?php echo ucwords($details['pname']);?>	
			<h4><b>PRODUCT CODE: </b> </h4>
			<?php echo $details['pcode'];?>			
		</div>
		<div class="modal-right">
			<h4><b>CATEGORY: </b></h4>
			<?php echo $details['category'];?>

			<h4><b>SUB CATEGORY: </b></h4>
			<?php echo $details['subcat'];?>

			<h4><b>PRICE: </b></h4>
			<?php if($details['amount'] == 0){?>
				Price on Request
			<?php }else{?>
				<?php if($details['discounted_price']){?>
					&#8358;<?php echo $details['discounted_price'];?>
					&nbsp;&nbsp;&nbsp;
					<del>&#8358;<?php echo $details['amount'];?></del>
				<?php }else{ ?>
					&#8358;<?php echo $details['amount'];?>
				<?php } ?>
			<?php }?>

			<h4><b>AVAILABILITY: </b></h4>
			<?php
				if($details['stock'] == 1){
										echo "In Stock";
				}else{
					echo "Unavailable";
				}
			?>
			<?php if(!empty($details['shoes_size'])){?>
				<div class="product-details">
					<h3>Shoe Size</h3>				
					<div class="myform">
						<select required name="sizes">
							<option value="" selected></option>
							<?php $product->displayShoeSizes($details['shoes_size']);?>					
						</select>
					</div>
				</div>
			<?php } ?>
			<?php if($details['stock'] == 1){?>
				<div class="myform">
					<input type="hidden" name="sku" value="<?php echo $details['pcode']; ?>">
					<input type="submit" value="Add to cart" style="width: auto; padding: 10px; margin-top: 10px;">
					<?php if($details['amount'] != 0){?>
						<a href="handlers/cart/addToRelaxway.php?sku=<?php echo $details['pcode'];?>">
							<input type="button" value="Add to Relaxway" style="width: auto; padding: 10px; margin-top: 10px;">
						</a>
					<?php }?>
				</div>						
				<?php }else{
					echo "Product out of stock";
				} ?>
		</div>
<?php } ?>