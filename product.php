
<div class="wrap-show-advance-info-box style-1">
	<h3 class="title-box">New Arrvails</h3>
	
	<div class="wrap-products">
		<div class="wrap-product-tab tab-style-1">
			<div class="tab-control">
				<a href="#furniture_1a" class="tab-control-item active">All Products</a>
				<a href="#furniture_1b" class="tab-control-item">Best Seller</a>
				<a href="#furniture_1c" class="tab-control-item">New Arrivals</a>
				<a href="#furniture_1d" class="tab-control-item">Top Rated</a>
			</div>
			<div class="tab-contents">

				<div class="tab-content-item active" id="furniture_1a">
					<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
						<?php 
						foreach($product->getAllProduct() as $listOne){ ?>
							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="product_details.php?slug=<?php echo $listOne['slug']; ?>" title="<?php echo $listOne['product_name'] ?>">
										<figure><img src="<?php echo 'assets/images/product/'.$listOne['image']; ?>" width="800" height="800" alt="<?php echo $listOne['product_name'] ?>"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item sale-label">sale</span>
									</div>
									<div class="wrap-btn">
										<a href="product_details.php?slug=<?php echo $listOne['slug'] ?>" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="product_details.php?slug=<?php echo $listOne['slug'] ?>" class="product-name"><span
									><?php echo $listOne['product_name'] ?></span></a>
									<div class="wrap-price"><ins><p class="product-price" style="color: green">
										&#8358;<?php echo number_format($listOne['amount']); ?></p></ins> 
										<del><p class="product-price" style="color: red">><?php
											$num3= (40/100)*$listOne['amount'];
											$adding2 = $num3 + $listOne['amount']; ?>
											
											&#8358;<?php echo number_format($adding2) ?>
										</p></del>
									</div>
								</div>
							</div><?php 
						} ?>

					</div>
				</div>

				<div class="tab-content-item" id="furniture_1b">
					<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
						<?php 
						foreach($product->getAllProductByCategory() as $listTwo){ ?>
							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="product_details.php?slug=<?php echo $listTwo['slug'] ?>" title="<?php echo $listTwo['product_name'] ?>">
										<figure><img src="<?php echo 'assets/images/product/'.$listTwo['image']; ?>" width="800" height="800" 
										alt="<?php echo $listTwo['product_name'] ?>"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item bestseller-label">Manfacturer</span>
									</div>
									<div class="wrap-btn">
										<a href="product_details.php?slug=<?php echo $listTwo['slug'] ?>" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="" class="product-name"><span><?php echo $listTwo['product_name'] ?></span></a>
									<div class="wrap-price"><ins><p class="product-price">
										&#8358;<?php echo number_format($listTwo['amount']); ?></p></ins> 
										<del><p class="product-price"><?php
											$num3= (40/100)*$listTwo['amount'];
											$adding2 = $num3 + $listTwo['amount']; ?>
											
											&#8358;<?php echo number_format($adding2) ?>
										</p></del>
									</div>
								</div>
							</div><?php 
						} ?>

					</div>
				</div>

				<div class="tab-content-item" id="furniture_1c">
					<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

						<?php 
						foreach($product->getAllProductByGenre() as $listThr){ ?>
							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" title="<?php echo $listThr['product_name'] ?>">
										<figure><img src="<?php echo 'assets/images/product/'.$listThr['image']; ?>" width="800" height="800" 
										alt="<?php echo $listThr['product_name'] ?>"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item bestseller-label">Manfacturer</span>
									</div>
									<div class="wrap-btn">
										<a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="" class="product-name"><span><?php echo $listThr['product_name'] ?></span></a>
									<div class="wrap-price"><ins><p class="product-price">
										&#8358;<?php echo number_format($listThr['amount']); ?></p></ins> 
										<del><p class="product-price"><?php
											$num3= (40/100)*$listThr['amount'];
											$adding2 = $num3 + $listThr['amount']; ?>
											
											&#8358;<?php echo number_format($adding2) ?>
										</p></del>
									</div>
								</div>
							</div><?php 
						} ?>
					</div>
				</div>

				<div class="tab-content-item" id="furniture_1d">
					<div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

						<?php 
						foreach($product->getAllProductByAmount() as $listThr){ ?>
							<div class="product product-style-2 equal-elem ">
								<div class="product-thumnail">
									<a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" title="<?php echo $listThr['product_name'] ?>">
										<figure><img src="<?php echo 'assets/images/product/'.$listThr['image']; ?>" width="800" height="800" 
										alt="<?php echo $listThr['product_name'] ?>"></figure>
									</a>
									<div class="group-flash">
										<span class="flash-item bestseller-label">Manfacturer</span>
									</div>
									<div class="wrap-btn">
										<a href="product_details.php?slug=<?php echo $listThr['slug'] ?>" class="function-link">quick view</a>
									</div>
								</div>
								<div class="product-info">
									<a href="" class="product-name"><span><?php echo $listThr['product_name'] ?></span></a>
									<div class="wrap-price"><ins><p class="product-price">
										&#8358;<?php echo number_format($listThr['amount']); ?></p></ins> 
										<del><p class="product-price"><?php
											$num3= (40/100)*$listThr['amount'];
											$adding2 = $num3 + $listThr['amount']; ?>
											
											&#8358;<?php echo number_format($adding2) ?>
										</p></del>
									</div>
								</div>
							</div><?php 
						} ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrap-top-banner">
		<a href="#" class="link-banner banner-effect-2">
			<figure><img src="assets/images/stationary.jpg" style="width: 1170px; height: 350px"  alt=""></figure>
		</a>
	</div>
</div>
