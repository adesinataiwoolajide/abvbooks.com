<?php require('header.php'); 
    $slug = $_GET['slug'];
    $details = $product->getSingleProduct($slug);
?>
<body class=" detail page ">
	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="./" class="link">home</a></li>
					<li class="item-link"><span>detail</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							    <ul class="">

                                    <li data-thumb="<?php echo "assets/images/product/".$details['image'] ?>">
                                        <img src="<?php echo "assets/images/product/".$details['image'] ?>" alt="product thumbnail" />
                                    </li>
							    </ul>
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name"><?php echo $details['product_name'] ?></h2>
                            <div class="short-desc">
                                <ul>
                                    <li><?php echo $details['description'] ?></li>
                                    
                                </ul>
                            </div>
                            <!-- <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                            </div> -->
                            <div class="wrap-price"><ins><p class="product-price" style="color: green">
                                &#8358;<?php echo number_format($details['amount']); ?></p></ins> 
                                <del><p class="product-price" style="color: red"><?php
                                    $num3= (40/100)*$details['amount'];
                                    $adding2 = $num3 + $details['amount']; ?>
                                    
                                    &#8358;<?php echo number_format($adding2) ?>
                                </p></del>
                            </div>
                            <div class="stock-info in-stock">
                                <p class="availability" >Availability: <b style="color:green">In Stock</b></p>
                            </div>
                            <form action="handlers/cart/addToCart.php" method="get">
	                            <input type="hidden" name="amount" value="<?php echo $details['amount'] ?>">
	                            <input type="hidden" name="slug" value="<?php echo $details['slug']; ?>">
	                            <input type="hidden" name="name" value="<?php echo $details['product_name']; ?>">
	                            <div class="quantity">
	                            	<span>Quantity:</span>
									<div class="quantity-input"><?php
										$early = 1;
                                        $current = $details['quantity'];
                                        print '<select class ="form-control" id="frm-login-uname" required name ="quantity">';
                                        foreach(range($early, $current) as $i){
                                            print'<option value=" '.$i.'"'.($i === $current ? 'selected="selected"' : '').'>'.$i.'</option>';
                                        }
                                        print '</select>';?>
									</div>
								</div>
	                            <input type="hidden" name="return" value="<?php $_SERVER['REQUEST_URI'] ?>">
	                            <div class="wrap-butons" align="center">
									<button type="submit" class="btn btn-danger btn-lg btn-block active">Add to Cart
	                                </button>
									<!-- <a href="#" class="btn add-to-cart">Add to Cart</a> -->
	                                <div class="wrap-btn">
										<a href="handlers/registration/addit.php?slug=<?php echo $details['slug'] ?>&&action=<?php echo 'Compare' ?>" 
	                                        class="btn btn-compare">Add Compare</a>
	                                    <a href="handlers/registration/addit.php?slug=<?php echo $details['slug'] ?>&&action=<?php echo 'Wishlist' ?>" 
	                                        class="btn btn-wishlist">Add Wishlist</a>
	                                     
	                                </div>
								</div>
	                        </form> 
	                         
						</div>

						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
								<a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
								<a href="#review" class="tab-control-item">Reviews</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p><?php echo $details['description'] ?></p>
									
								</div>
								<div class="tab-content-item " id="add_infomation">
									<table class="shop_attributes">
										<tbody>
											<tr>
												<th>Category</th><td class="product_weight">1 kg</td>
											</tr>
											<tr>
												<th>Type</th><td class="product_dimensions">12 x 15 x 23 cm</td>
											</tr>
											<tr>
												<th>Sub Category</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="tab-content-item " id="review">
									
									<div class="wrap-review-form">
										
										<div id="comments">
											<h2 class="woocommerce-Reviews-title">01 review for <span>Radiant-360 R6 Chainsaw Omnidirectional [Orage]</span></h2>
											<ol class="commentlist">
												<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
													<div id="comment-20" class="comment_container"> 
														<img alt="" src="assets/images/author-avata.jpg" height="80" width="80">
														<div class="comment-text">
															<div class="star-rating">
																<span class="width-80-percent">Rated <strong class="rating">5</strong> out of 5</span>
															</div>
															<p class="meta"> 
																<strong class="woocommerce-review__author">admin</strong> 
																<span class="woocommerce-review__dash">–</span>
																<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >Tue, Aug 15,  2017</time>
															</p>
															<div class="description">
																<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
															</div>
														</div>
													</div>
												</li>
											</ol>
										</div><!-- #comments -->

										<div id="review_form_wrapper">
											<div id="review_form">
												<div id="respond" class="comment-respond"> 

													<form action="#" method="post" id="commentform" class="comment-form" novalidate="">
														<p class="comment-notes">
															<span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
														</p>
														<div class="comment-form-rating">
															<span>Your rating</span>
															<p class="stars">
																
																<label for="rated-1"></label>
																<input type="radio" id="rated-1" name="rating" value="1">
																<label for="rated-2"></label>
																<input type="radio" id="rated-2" name="rating" value="2">
																<label for="rated-3"></label>
																<input type="radio" id="rated-3" name="rating" value="3">
																<label for="rated-4"></label>
																<input type="radio" id="rated-4" name="rating" value="4">
																<label for="rated-5"></label>
																<input type="radio" id="rated-5" name="rating" value="5" checked="checked">
															</p>
														</div>
														<p class="comment-form-author">
															<label for="author">Name <span class="required">*</span></label> 
															<input id="author" name="author" type="text" value="">
														</p>
														<p class="comment-form-email">
															<label for="email">Email <span class="required">*</span></label> 
															<input id="email" name="email" type="email" value="" >
														</p>
														<p class="comment-form-comment">
															<label for="comment">Your review <span class="required">*</span>
															</label>
															<textarea id="comment" name="comment" cols="45" rows="8"></textarea>
														</p>
														<p class="form-submit">
															<input name="submit" type="submit" id="submit" class="submit" value="Submit">
														</p>
													</form>

												</div><!-- .comment-respond-->
											</div><!-- #review_form -->
										</div><!-- #review_form_wrapper -->

									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Free Shipping</b>
											<span class="subtitle">On Order Over 20000</span>
											<p class="desc">Details</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Special Offer</b>
											<span class="subtitle">Get a gift!</span>
											<p class="desc">Details</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Order Return</b>
											<span class="subtitle">Return within 7 days</span>
											<p class="desc">Details</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Products By The Same Manufacturer</h2>
						<div class="widget-content">
							<ul class="products"><?php 
								$publisher_id = $details['publisher_id'];
								foreach($product->getAllProductByPublis($publisher_id) as $listPub){ ?>
									<li class="product-item">
										<div class="product product-widget-style">
											<div class="thumbnnail">
												<a href="product_details.php?slug=<?php echo $listPub['slug'] ?>" title="<?php echo $listThr['product_name'] ?>">
													<figure><img src="<?php echo "assets/images/product/".$listPub['image'] ?>" alt=""></figure>
												</a>
											</div>
											<div class="product-info">
												<a href="product_details.php?slug=<?php echo $listPub['slug'] ?>" title="<?php echo $listThr['product_name'] ?>"
													 class="product-name"><span><?php echo $listPub['product_name']; ?></span></a>
												<div class="wrap-price"><ins><p class="product-price" style="color: green">
													&#8358;<?php echo number_format($listPub['amount']); ?></p></ins> 
													<del><p class="product-price" style="color: red"><?php
														$nu= (40/100)*$listPub['amount'];
														$add = $nu + $listPub['amount']; ?>
														
														&#8358;<?php echo number_format($add) ?>
													</p></del>
												</div>
											</div>
										</div>
									</li><?php 
								} ?>

								
							</ul>
						</div>
					</div>

				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">Related Products</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                                <?php 
                                $genre_id = $details['genre_id'];
						        foreach($product->listSingleGensProductS($genre_id) as $listNew){ ?>
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="product_details.php?slug=<?php echo $listNew['slug']; ?>" title="<?php echo $listNew['product_name'] ?>">
                                                <figure><img src="<?php echo "assets/images/product/".$listNew['image'] ?>" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="product_details.php?slug=<?php echo $listNew['slug']; ?>" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="product_details.php?slug=<?php echo $listNew['slug']; ?>" class="product-name"><span>
											<?php echo $listNew['product_name'] ?></span>
											</a>
											<p style="color: green">
                                            &#8358;<?php echo number_format($listNew['amount']); ?></p></ins> 
											<del>
												<p class="product-price" style="color: red"><?php
												$num= (40/100)*$listNew['amount'];
												$adding = $num + $listNew['amount']; ?>
												
												&#8358;<?php echo number_format($adding) ?>
												</p>
											</del>
										</div>
									</div><?php
								} ?>

								

							</div>
						</div><!--End wrap-products-->
					</div>
				</div>

			</div><!--end row-->

		</div><!--end container-->


	</main>
	<!--main area-->

    <?php require('footer.php'); ?>