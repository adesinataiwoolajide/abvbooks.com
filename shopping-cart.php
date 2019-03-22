<?php require('header.php');
	if(!isset($_SESSION['id'])){ ?>
        <script>
            window.location=('login.php');
        </script><?php 
        $_SESSION['error'] = "Please Register Or Login into Your Account"; 
    }

    if(!isset($_SESSION['cart'])){ ?>
    	<script>
            window.location=('./');
        </script><?php
        $_SESSION['error'] = "Your Shopping Cart is Empty"; 

    } ?>

<body class=" shopping-cart page ">
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="./" class="link">home</a></li>
					<li class="item-link"><span>Shopping Cart</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<?php
				if(empty($_SESSION['cart'])){ ?>
					<h2><p style="color: red" align="center"> Your Shoppping Cart is Empty </p></h2><?php

				} else{

					$cart = $_SESSION['cart'];
			        $count = count($cart);
			        $reg_number = $_SESSION['reg_number'];
			        $shipLocation = $register->getShippinCusgAddress($reg_number); 
			        $state = $shipLocation['state']; 
			        $shipAmount = $register->getShippinLocationMoney($state); 
			        $shippingFee = $shipAmount['charge']; $total = array(); ?>
					<!-- <div class="wrap-iten-in-cart">
						<h3 class="box-title">Products Name</h3>
						<ul class="products-cart"><?php 
							foreach($cart as $item){
								$slug = $item['slug'];
								$details = $product->getSingleProduct($slug);  ?>

								<li class="pr-cart-item">
									<div class="product-image">
										<figure><img src="<?php echo "assets/images/product/".$details['image'] ?>" alt=""></figure>
									</div>
									<div class="product-name">
										<a class="link-to-product" href="#"><?php echo ucwords($item['name']); ?></a>
									</div>
									<div class="price-field produtc-price"><p class="price">&#8358;<?php echo $price = number_format( $item['amount']) ?></p></div>
									<div class="quantity">
										<div class="quantity-input">
											<input type="text" name="product-quatity" value="<?php echo $item['quantity']; ?>">
											<a class="btn btn-reduce" href="#"></a>
											<a class="btn btn-increase" href="#"></a>
										</div>
									</div>
									<div class="price-field sub-total"><p class="price"><?php $tot = $item['amount'] * $item['quantity'];  ?>&#8358;<?php echo number_format($tot); 
										$cal = $item['amount'] * $item['quantity'];
	                                    array_push($total, $cal); ?></p></div>
									<div class="delete">
										<a href="handlers/cart/removeFromCart.php?slug=<?php echo $item['slug']?>"><i class="fa fa-trash-o"></i></a>
									</div>
								</li><?php 
							} ?>
							
						</ul>
					</div> -->
					<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    
	                    <div class="summary summary-checkout">
	                        <p align="center">Please Preview Your Orders Below</p>
	                        <?php 
	                        if($count > 0){ 
	                            $cart = $_SESSION['cart'];
	                            $count = count($cart);
	                            $reg_number = $_SESSION['reg_number'];
	                            $shipLocation = $register->getShippinCusgAddress($reg_number); 
	                            $state = $shipLocation['state']; 
	                            $shipAmount = $register->getShippinLocationMoney($state); 
	                            $shippingFee = $shipAmount['charge']; 
	                            $total = array(); ?> <br><br>
	                           
                                <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                                    <script src='https://js.paystack.co/v1/inline.js'></script>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                
                                                <th>Product Image</th>
                                                <th>Quantity</th>
                                                <th>Product Name</th>
                                                <th>Amount</th>
                                                <th>Total Price</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody><?php
                                            foreach($_SESSION['cart'] as $item){
                                                $slug = $item['slug'];
                                                $details = $product->getSingleProduct($slug); 
                                                $cal = $item['amount'] * $item['quantity'];
                                                array_push($total, $cal);  ?>
                                                <tr>
                                                    <td>
                                                        <figure>
                                                            <img src="<?php echo "assets/images/product/".$details['image'] ?>" alt="" style="width: 50px; height: 50px">
                                                        </figure>
                                                    </td>
                                                    <td><?php echo $quantity = $item['quantity']; ?><br>  </td>
                                                    <td><?php echo ucwords($item['name']);?></td>
                                                    <td>&#8358;<?php echo number_format($item['amount']);?></td>
                                                    <td><?php  echo "&#8358;".number_format($item['amount'] * $quantity);?></td>
                                                    <td><a href="handlers/cart/removeFromCart.php?slug=<?php echo $item['slug'];?>"><i class="fa fa-trash-o"></i></a></td>
                                                </tr><?php 
                                            } ?>
                                            <tr>
                                                <td colspan="5"></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>SUBTOTAL</b></span></td>
                                                <td>&#8358;<?php echo number_format(array_sum($total)+0) ?></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>SHIPPING CHARGES:</b></span></td>
                                                <td>&#8358;<?php echo number_format($shippingFee); ?></td>
                                            </tr>                                       

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>TOTAL</b></span></td>
                                                <td>&#8358;<?php echo number_format(array_sum($total)+$shippingFee);?></td>
                                            </tr> 
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>                                                   
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>TRANSACTION ID:</b></span></td>
                                                <td> <?php echo $_SESSION['transactionId'];?></td>
                                            </tr> 
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>CHECK OUT</b></span></td>
                                                <td> <a class="link-to-shop" href="check-out.php">Check Out<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></td>
                                            </tr> 
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span style="text-align: right; display: block;"><b>CONTINUE SHOPPING:</b></span></td>
                                                <td>  <a class="link-to-shop" href="grid_shop.php">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></td>
                                            </tr>                           
                                        </tbody>
                                    </table>
                                </div>
	                                
	                            </form><?php
	                        }else{ ?>
	                            <h3><p style="color: red" align="center">No products in your cart</p></h3><?php 
	                        } ?>
	                    </div>
	                </div>

					<?php 

				} ?>

				<div class="wrap-show-advance-info-box style-1 box-in-site">
					<h3 class="title-box">Most Viewed Products</h3>
					<div class="wrap-products">
						<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >						
							<?php 
							foreach($product->getAllProductByGenre() as $listOne){ ?>
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
					</div><!--End wrap-products-->
				</div>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>
<?php require('footer.php'); ?>