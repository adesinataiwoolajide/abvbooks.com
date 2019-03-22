<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php  include('script.php'); ?>

	<meta charset="utf-8">
	<title>ABV Books and Stationaries</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="distribution" content="global">
	<meta name="revisit-after" content="2 Days">
	<meta name="robots" content="ALL">
	<meta name="rating" content="8 YEARS">
	<meta name="Language" content="en-us">
	<meta name="GOOGLEBOT" content="NOARCHIVE">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/fotorama.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.html">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>
<body class="homepage">

	<?php  include('news-letter.php'); ?>
	<div class="main">
		<header class="navbar navbar-custom container-full-sm" id="header">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<div class="top-link top-link-left select-dropdown">
								<fieldset>
									<select name="speed" class="countr option-drop">
									<option selected="selected">English</option>
									<option>Frence</option>
									<option>German</option>
									</select>
									<select name="speed" class="currenc option-drop">
									<option selected="selected">USD</option>
									<option>EURO</option>
									<option>POUND</option>
									</select>
								</fieldset>
							</div>
						</div>
						<div class="col-6">
							<div class="top-right-link right-side">
								<ul>
									<li class="login-icon content">
										<a class="content-link">
											<span class="content-icon"></span> 
										</a> 
										<a href="login.html" title="Login">Login</a> or
										<a href="register.html" title="Register">Register</a>
										<div class="content-dropdown">
											<ul>
												<li class="login-icon"><a href="login.html" title="Login"><i class="fa fa-user"></i> Login</a></li>
												<li class="register-icon"><a href="register.html" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
											</ul>
										</div>
									</li>
									<li class="track-icon">
										<a href="#" title="Track your order"><span></span> Track your order</a>
									</li>
									<li class="gift-icon">
										<a href="#" title="Gift card"><span></span> Gift card</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle">
				<div class="container">
					<hr>
					<div class="row">
						<div class="col-xl-3 col-md-3 col-xl-20per">
							<div class="header-middle-left">
								<div class="navbar-header float-none-sm">
									<a class="navbar-brand page-scroll" href="index-2.html">
										<img alt="Stylexpo" src="images/logo.png">
									</a> 
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-6 col-xl-60per">
							<div class="header-right-part">
								<div class="category-dropdown select-dropdown">
									<fieldset>
									<select id="search-category" class="option-drop" name="search-category">
										<option value="">All Categories</option>
										<option value="20">Electronics</option>
										<option value="26">■ PC</option>
										<option value="43">&nbsp;&nbsp;&nbsp;- Dell Inspiron</option>
										<option value="27">■ Mac</option>
										<option value="48">&nbsp;&nbsp;&nbsp;- Desktop Mac</option>
										<option value="51">■ Laptops</option>
										<option value="52">&nbsp;&nbsp;&nbsp;- Accer laptop</option>
									</select>
									</fieldset>
								</div>
								<div class="main-search">
									<div class="header_search_toggle desktop-view">
										<form>
											<div class="search-box">
												<input class="input-text" type="text" placeholder="Search entire store here...">
												<button class="search-btn"></button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-3 col-xl-20per">
							<div class="right-side float-left-xs header-right-link">
								<ul>
									<li class="compare-icon">
										<a href="compare.html">
											<span></span>
										</a>
									</li>
									<li class="wishlist-icon">
										<a href="wishlist.html">
											<span></span>
										</a>
									</li>
									<li class="cart-icon"> 
										<a href="#"> <span></span> 
											<div class="my-cart">2 items<br>$99.00</div> 
										</a>
										<div class="cart-dropdown header-link-dropdown">
											<ul class="cart-list link-dropdown-list">
												<li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
													<div class="media"> 
														<a class="pull-left"> <img alt="Stylexpo" src="images/1.jpg"></a>
														<div class="media-body"> 
															<span>
																<a href="#">Black African Print Skirt</a>
															</span>
															<p class="cart-price">$14.99</p>
															<div class="product-qty">
																<label>Qty:</label>
																<div class="custom-qty">
																	<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
																</div>
															</div>
														</div>
													</div>
												</li>
												<li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
													<div class="media"> 
														<a class="pull-left"> <img alt="Stylexpo" src="images/1.jpg"></a>
														<div class="media-body"> 
															<span>
																<a href="#">Black African Print Skirt</a>
															</span>
															<p class="cart-price">$14.99</p>
															<div class="product-qty">
																<label>Qty:</label>
																<div class="custom-qty">
																	<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
																</div>
															</div>
														</div>
													</div>
												</li>
											</ul>
											<p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
											<div class="clearfix"></div>
											<div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
										</div>
									</li>
									<li class="side-toggle">
										<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-bottom"> 
				<div class="container">
					<div class="row position-r">
						<div class="col-xl-2 col-lg-3 col-xl-20per position-initial">
							<div class="sidebar-menu-dropdown home">
								<a class="btn-sidebar-menu-dropdown"><span></span> Categories </a>
								<div id="cat" class="cat-dropdown">
									<div class="sidebar-contant">
										<div id="menu" class="navbar-collapse collapse" >
											<div class="top-right-link mobile right-side">
												<ul>
													<li class="login-icon content">
														<a class="content-link">
															<span class="content-icon"></span> 
														</a> 
														<a href="login.html" title="Login">Login</a> or
														<a href="register.html" title="Register">Register</a>
														<div class="content-dropdown">
															<ul>
																<li class="login-icon"><a href="login.html" title="Login"><i class="fa fa-user"></i> Login</a></li>
																<li class="register-icon"><a href="register.html" title="Register"><i class="fa fa-user-plus"></i> Register</a></li>
															</ul>
														</div>
													</li>
													<li class="track-icon">
														<a title="Track your order"><span></span> Track your order</a>
													</li>
													<li class="gift-icon">
														<a href="#" title="Gift card"><span></span> Gift card</a>
													</li>
												</ul>
											</div>
											<ul class="nav navbar-nav ">
												<li class="level sub-megamenu">
													<span class="opener plus"></span>
													<a href="shop.html" class="page-scroll"><i class="fa fa-female"></i>Fashion</a>
													<div class="megamenu mobile-sub-menu "  style="width:430px;">
														<div class="megamenu-inner-top">
															<ul class="sub-menu-level1">
																<li class="level2">
																	<a href="shop.html"><span>Kids Fashion</span></a>
																	<ul class="sub-menu-level2 ">
																		<li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
																		<li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
																	
																	</ul>
																</li>
																<li  class="level2">
																	<div class="sub-menu-slider d-none d-lg-block ">
																		<div class="row">
																			<div class="owl-carousel sub_menu_slider">
																				<div class="product-item">
																					<div class="product-image"> 
																						<a href="product-page.html"> 
																							<img src="images/2.jpg" alt="Stylexpo"> 
																						</a>
																						<div class="product-detail-inner">
																							<div class="detail-inner-left align-center">
																								<ul>
																									<li class="pro-cart-icon">
																										<form>
																											<button title="Add to Cart"><span></span></button>
																										</form>
																									</li>
																									<li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
																									<li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																					<div class="product-item-details">
																						<div class="product-item-name"> 
																							<a href="product-page.html">Defyant Reversible Dot Shorts</a> 
																						</div>
																						<div class="price-box"> 
																							<span class="price">$80.00</span>  
																						</div>
																						<div class="rating-summary-block right-side">
																							<div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
																						</div>
																					</div>
																				</div>
																				<div class="product-item">
																					<div class="product-image"> 
																						<a href="product-page.html"> 
																							<img src="images/6.jpg" alt="Stylexpo"> 
																						</a>
																						<div class="product-detail-inner">
																							<div class="detail-inner-left align-center">
																								<ul>
																									<li class="pro-cart-icon">
																										<form>
																											<button title="Add to Cart"><span></span></button>
																										</form>
																									</li>
																									<li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
																									<li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																					<div class="product-item-details">
																						<div class="product-item-name"> 
																							<a href="product-page.html">Defyant Reversible Dot Shorts</a> 
																						</div>
																						<div class="price-box"> 
																							<span class="price">$80.00</span>              
																						</div>
																						<div class="rating-summary-block right-side">
																							<div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
																						</div>
																					</div>
																				</div>
																				<div class="product-item">
																					<div class="product-image"> 
																					<a href="product-page.html"> 
																						<img src="images/8.jpg" alt="Stylexpo"> 
																					</a>
																					<div class="product-detail-inner">
																						<div class="detail-inner-left align-center">
																						<ul>
																							<li class="pro-cart-icon">
																							<form>
																								<button title="Add to Cart"><span></span></button>
																							</form>
																							</li>
																							<li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
																							<li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
																						</ul>
																						</div>
																					</div>
																					</div>
																					<div class="product-item-details">
																					<div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
																					<div class="price-box"> <span class="price">$80.00</span>  
																					</div>
																					<div class="rating-summary-block right-side">
																						<div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
																					</div>
																					</div>
																				</div>
																			<div class="product-item">
																				<div class="product-image"> 
																				<a href="product-page.html"> 
																					<img src="images/10.jpg" alt="Stylexpo"> 
																				</a>
																				<div class="product-detail-inner">
																					<div class="detail-inner-left align-center">
																					<ul>
																						<li class="pro-cart-icon">
																						<form>
																							<button title="Add to Cart"><span></span></button>
																						</form>
																						</li>
																						<li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
																						<li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
																					</ul>
																					</div>
																				</div>                  
																				</div>
																				<div class="product-item-details">
																				<div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
																				<div class="price-box"> <span class="price">$80.00</span> 
																				</div>
																				<div class="rating-summary-block right-side">
																					<div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
																				</div>
																				</div>
																			</div>
																			<div class="product-item">
																				<div class="product-image"> 
																				<a href="product-page.html"> 
																					<img src="images/16.jpg" alt="Stylexpo"> 
																				</a>
																				<div class="product-detail-inner">
																					<div class="detail-inner-left align-center">
																					<ul>
																						<li class="pro-cart-icon">
																						<form>
																							<button title="Add to Cart"><span></span></button>
																						</form>
																						</li>
																						<li class="pro-wishlist-icon"><a href="wishlist.html" title="Wishlist"></a></li>
																						<li class="pro-compare-icon"><a href="compare.html" title="Compare"></a></li>
																					</ul>
																					</div>
																				</div>
																				</div>
																				<div class="product-item-details">
																				<div class="product-item-name"> <a href="product-page.html">Defyant Reversible Dot Shorts</a> </div>
																				<div class="price-box"> <span class="price">$80.00</span>
																				</div>
																				<div class="rating-summary-block right-side">
																					<div title="53%" class="rating-result"> <span style="width:53%"></span> </div>
																				</div>
																				</div>
																			</div>
																			</div>
																		</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
												</li>
												<li class="level">
													<a href="shop.html" class="page-scroll"><i class="fa fa-camera-retro"></i>Cameras</a>
												</li>
												<li class="level">
													<a href="shop.html" class="page-scroll">
													<i class="fa fa-desktop"></i>computers<div class="menu-label"><span class="hot-menu"> Hot </span></div> 
													</a>
												</li>
										
												<li class="level sub-megamenu ">
													<span class="opener plus"></span>
													<a href="shop.html" class="page-scroll"><i class="fa fa-tablet"></i>Smartphones</a>
													<div class="megamenu mobile-sub-menu"  style="width:630px;">
														<div class="megamenu-inner-top">
														<ul class="sub-menu-level1">
															<li class="level2">
															<a href="shop.html"><span>Women Clothings</span></a>
															<ul class="sub-menu-level2">
																<li class="level3"><a href="shop.html"><span>■</span>Dresses</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Sport Jeans</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Skirts</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Tops</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Sleepwear</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Jeans</a></li>
															</ul>
															</li>
															<li class="level2">
															<a href="shop.html"><span>Men Clothings</span></a>
															<ul class="sub-menu-level2 ">
																<li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
															</ul>
															</li>
															<li class="level2">
															<a href="shop.html"><span>Juniors kid</span></a>
															<ul class="sub-menu-level2 ">
																<li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Phone Cases</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Trousers</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Purse</a></li>
																<li class="level3"><a href="shop.html"><span>■</span>Wallets</a></li>
															</ul>
															</li>
														</ul>
														</div>
													</div>
												</li>
										
											</ul>
											<div class="header-top mobile">
												<div class="">
													<div class="row">
														<div class="col-12">
															<div class="top-link top-link-left select-dropdown ">
																<fieldset>
																	<select name="speed" class="country option-drop">
																		<option selected="selected">English</option>
																		<option>Frence</option>
																		<option>German</option>
																		</select>
																		<select name="speed" class="currency option-drop">
																		<option selected="selected">USD</option>
																		<option>EURO</option>
																		<option>POUND</option>
																	</select>
																</fieldset>
															</div>
														</div>
														<div class="col-12">
															<div class="top-link right-side">
																<div class="help-num" >Need Help? : 03 233 455 55</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-xl-60per">
							<div class="bottom-inner">
								<div class="position-r">          
									<div class="nav_sec position-r">
										<div class="mobilemenu-title mobilemenu">
											<span>Menu</span>
											<i class="fa fa-bars pull-right"></i>
										</div>
										<div class="mobilemenu-content">
											<ul class="nav navbar-nav" id="menu-main">
												<li class="active">
													<a href="index-2.html"><span>Home</span></a>
												</li>
												<li>
													<a href="shop.html"><span>Shop</span></a>
												</li>
												<li>
													<a href="about.html"><span>About Us</span></a>
												</li>
												<li>
													<a href="blog.html"><span>Blog</span></a>
												</li>
												<li>
													<a href="contact.html"><span>Contact</span></a>
												</li>
												<li class="level dropdown ">
													<span class="opener plus"></span>
													<a href="#" class="page-scroll"><span>Pages</span></a>
													<div class="megamenu mobile-sub-menu">
														<div class="megamenu-inner-top">
															<ul class="sub-menu-level1">
																<li class="level2">
																	<ul class="sub-menu-level2 ">
																		<li class="level3"><a href="account.html"><span>■</span>Account</a></li>
																	
																	</ul>
																</li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-3 col-xl-20per d-none d-lg-block">
							<div class="right-side float-left-xs header-right-link">
								<div class="offer-btn right-side">
									<a href="shop.html" class="gift-offer" >
									<i class="fa fa-gift"></i> Offers
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="popup-links ">
				<div class="popup-links-inner">
					<ul>
					<li class="categories">
						<a class="popup-with-form" href="#categories_popup"><span class="icon"></span><span class="icon-text">Categories</span></a>
					</li>
					<li class="cart-icon">
						<a class="popup-with-form" href="#cart_popup"><span class="icon"></span><span class="icon-text">Cart</span></a>
					</li>
					<li class="account">
						<a class="popup-with-form" href="#account_popup"><span class="icon"></span><span class="icon-text">Account</span></a>
					</li>
					<li class="search">
						<a class="popup-with-form" href="#search_popup"><span class="icon"></span><span class="icon-text">Search</span></a>
					</li>
					<li class="scroll scrollup">
						<a href="#"><span class="icon"></span><span class="icon-text">Scroll-top</span></a>
					</li>
					</ul>
				</div>
				<div id="popup_containt">
					<div id="categories_popup" class="white-popup-block mfp-hide popup-position">
						<div class="popup-title">
							<h2 class="main_title heading"><span>categories</span></h2>
						</div>
						<div class="popup-detail">
							<ul class="cate-inner">
								<li class="level sub-megamenu">
									<span class="opener plus"></span>
									<a href="shop.html" class="page-scroll"><i class="fa fa-female"></i>Fashion (10)</a>
									<div class="megamenu  mega-sub-menu">
										<div class="megamenu-inner-top">
											<ul class="sub-menu-level1">
											<li class="level2">
												<ul class="sub-menu-level2 ">
													<li class="level3"><a href="shop.html"><span>■</span>Blazer & Coat</a></li>
													<li class="level3"><a href="shop.html"><span>■</span>Sport Shoes</a></li>
												
												</ul>
											</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="level">
									<a href="shop.html" class="page-scroll"><i class="fa fa-camera-retro"></i>Cameras (70)</a>
								</li>
								<li class="level">
									<a href="shop.html" class="page-scroll"><i class="fa fa-desktop"></i>computers (10)</a>
								</li>
								<li class="level sub-megamenu">
									<span class="opener plus"></span>
									<a href="shop.html" class="page-scroll"><i class="fa fa-clock-o"></i>Wathches (15)</a>
									<div class="megamenu mega-sub-menu">
										<div class="megamenu-inner-top">
										<ul class="sub-menu-level1">
											<li class="level2">
												<ul class="sub-menu-level2">
													<li class="level3"><a href="shop.html"><span>■</span>Dresses</a></li>
													<li class="level3"><a href="shop.html"><span>■</span>Sport Jeans</a></li>
													<li class="level3"><a href="shop.html"><span>■</span>Skirts</a></li>
													
												</ul>
											</li>
										</ul>
										</div>
									</div>
								</li>
								<li class="level">
									<a href="shop.html" class="page-scroll"><i class="fa fa-shopping-bag"></i>Bags (18)</a>
								</li>
							</ul>
						</div>  
					</div>
					<div id="cart_popup" class="white-popup-block mfp-hide popup-position">
						<div class="popup-title">
							<h2 class="main_title heading"><span>cart</span></h2>
						</div>
					<div class="popup-detail">
						<div class="cart-dropdown ">
							<ul class="cart-list link-dropdown-list">
								<li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
									<div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/1.jpg"></a>
										<div class="media-body"> <span><a href="#">Black African Print Skirt</a></span>
											<p class="cart-price">$14.99</p>
											<div class="product-qty">
												<label>Qty:</label>
												<div class="custom-qty">
													<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
												</div>
											</div>
										</div>
									</div>
								</li>
								<li> 
									<a class="close-cart"><i class="fa fa-times-circle"></i></a>
									<div class="media"> <a class="pull-left"> <img alt="Stylexpo" src="images/2.jpg"></a>
										<div class="media-body"> <span><a href="#">Black African Print Skirt</a></span>
											<p class="cart-price">$14.99</p>
											<div class="product-qty">
												<label>Qty:</label>
												<div class="custom-qty">
													<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty">
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
							<p class="cart-sub-totle"> <span class="pull-left">Cart Subtotal</span> <span class="pull-right"><strong class="price-box">$29.98</strong></span> </p>
							<div class="clearfix"></div>
							<div class="mt-20"> <a href="cart.html" class="btn-color btn">Cart</a> <a href="checkout.html" class="btn-color btn right-side">Checkout</a> </div>
							</div>
						</div>
					</div>
					<div id="account_popup" class="white-popup-block mfp-hide popup-position">
						<div class="popup-title">
							<h2 class="main_title heading"><span>Account</span></h2>
						</div>
						<div class="popup-detail">
							<div class="row">
								<div class="col-lg-4">
									<a href="account.html">
										<div class="account-inner mb-30">
											<i class="fa fa-user"></i><br/>
											<span>Account</span>
										</div>
									</a>
								</div>
								<div class="col-lg-4">
									<a href="register.html">
										<div class="account-inner mb-30">
											<i class="fa fa-user-plus"></i><br/>
											<span>Register</span>
										</div>
									</a>
								</div>
								<div class="col-lg-4">
									<a href="cart.html">
										<div class="account-inner mb-30">
											<i class="fa fa-shopping-bag"></i><br/>
											<span>Shopping</span>
										</div>
									</a>
								</div>
								<div class="col-lg-4">
									<a href="account.html#step4">
										<div class="account-inner">
											<i class="fa fa-key"></i><br/>
											<span>Change Pass</span>
										</div>
									</a>
								</div>
								<div class="col-lg-4">
									<a href="account.html#step3">
										<div class="account-inner">
											<i class="fa fa-history"></i><br/>
											<span>history</span>
										</div>
									</a>
								</div>
								<div class="col-lg-4">
									<a href="login.html">
										<div class="account-inner">
											<i class="fa fa-share-square-o"></i><br/>
											<span>log out</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div id="search_popup" class="white-popup-block mfp-hide popup-position">
						<div class="popup-title">
							<h2 class="main_title heading"><span>Search</span></h2>
						</div>            
						<div class="popup-detail">
							<div class="main-search">
								<div class="header_search_toggle desktop-view">
									<form>
										<div class="search-box">
											<input class="input-text" type="text" placeholder="Search entire store here...">
											<button class="search-btn"></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>