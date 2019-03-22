<?php 
	session_start();
	include_once("connection/connection.php");
	require_once("dev/autoload.php");
	require_once("dev/general/all_purpose_class.php");
	require 'dev_class/register/customer_registration_class.php';
	$register = new newCustomerRegistration($db);
	$all_purpose = new all_purpose($db);
	
	$category = new Category;
	$type = new Type;
	$genre = new Genre;
	$author = new Author;
	$publisher = new Publisher;
	$product = new Product;

	if(!isset($_SESSION['transactionId'])){
        $_SESSION['transactionId'] = $all_purpose->generateRandomHash(16);   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABV Books & Stationaries</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/color-01.css">

	<link rel="stylesheet" type="text/css" href="administrator/assets/Toast/css/Toast.min.css">
</head>
<body class="home-page home-01 ">

	<!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!--header-->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<!-- <div class="wrap-banner-top">
					<figure><img src="assets/images/banner-top.jpg" alt="mercado top banner" width="1920" height="88"></figure>
				</div> -->

				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Hotline: (+123) 456 789" href="#" ><span class="icon label-before fa fa-mobile"></span>Hotline: (+123) 456 789</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul><?php 
								if(!isset($_SESSION['id'])){ ?>
									<li class="menu-item" >
										<a title="Register or Login" href="logout.php">Register or Login</a>
									</li>
									<?php
								}else{ ?>
									<li class="menu-item" >
										<a title="Register or Login" href="login.php">Log Out</a>
									</li>
									<?php
								} ?>
								<li class="menu-item" ><a title="Newsletter" href="#">Newsletter</a></li>
								<li class="menu-item" ><a title="Store Location" href="#">Store Location</a></li>
								<li class="menu-item" ><a title="About" href="about-us.html">About</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="./" class="link-to-home"><img src="assets/images/abv.png" alt="ABV Books and Stationaries" style="width: ; height: 70px;"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">All Category</a>
										<ul class="list-cate">
										<li class="level-0">All Category</li><?php 
											foreach($category->getAllCategory() as $listCate){ ?>
												<li class="level-1">-<?php echo $listCate['category_name'] ?> </li><?php
											} ?>
										</ul>
									</div>
								</form>
							</div>

						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>

							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
							
							<div class="wrap-icon-section minicart">
								<a href="shopping-cart.php" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<?php 
                                        if(isset($_SESSION['cart'])){ ?>
                                            
                                            <span class="index">
                                            	<?php echo count($_SESSION['cart']); ?>Item(s)
                                            	 
                                            </span><a href="shopping-cart.php"><span class="title">VIEW CART</span></a><?php
                                        }else{ ?>
                                            <span class="index">0 Items

                                            </span><span class="title">CART</span><?php
                                        } ?>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">


					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="./" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>

								

								<li class="menu-item">
									<a href="./" title="Fashion & Accessories" class="link-term mercado-item-title">Home</a>
								</li>

								<li class="menu-item">
									<a href="./" title="Fashion & Accessories" class="link-term mercado-item-title">About Us</a>
								</li>

								<li class="menu-item menu-item-has-children item-megamenu" >
									<a href="#" title="Furnitures & Home decors" class="link-term mercado-item-title">Categories</a>
									<div class="wrap-megamenu">
										<div class="megamenu-content min-height-526 bg-furniture-decor" >
											<div class="row">
												<div class="custom-col-5">
													<div class="wrap-vertical-nav">
														<h2 class="menu-title">Stationaries</h2>
														<ul>
															<li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
															<li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
															
														</ul>
													</div>
												</div>
												<div class="custom-col-5">
													<div class="wrap-vertical-nav">
														<h2 class="menu-title">Fiction Books</h2>
														<ul>
															<li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
															<li class="menu-item"><a href="#" class="link-term">Tops & Tees</a></li>
															
														</ul>
													</div>
												</div>
												<div class="custom-col-5">
													<div class="wrap-vertical-nav">
														<h2 class="menu-title">Non Fiction Books</h2>
														<ul>
															<li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
															<li class="menu-item"><a href="#" class="link-term">Clothing Sets</a><span class="nav-label sale-label">sale</span></li>
															
														</ul>
													</div>
												</div>
												<div class="custom-col-5-2">
													<div class="wrap-banner mg-position-01 banner-style-1 ">
														<h3 class="banner-title">Fresh Look</h3>
														<h4 class="sub-title">We’ll Make Your office more comfortablet</h4>
														<a href="#" class="btn banner-link">Shop now</a>
													</div>
												</div>
											</div>
											
										</div>
									</div>
								</li>

								<li class="menu-item">
									<a href="list_shop.php" title="Fashion & Accessories" class="link-term mercado-item-title">Shop</a>
								</li>

								

								<li class="menu-item menu-item-has-children item-megamenu" >
									<a href="#" title="Tools & Equipments" class="link-term mercado-item-title" >Publisher</a>
									<div class="wrap-megamenu">
										<div class="megamenu-content">

											<div class="row">

												<div class="col-lg-3">
													<div class="wrap-vertical-nav">
														<h2 class="menu-title">Novel</h2>
														<ul>
															<li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
															<li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
															
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="wrap-vertical-nav">
														<h2 class="menu-title">Arts</h2>
														<ul>
															<li class="menu-item"><a href="#" class="link-term">Dresses</a></li>
															<li class="menu-item"><a href="#" class="link-term">Tops & Tees</a></li>
															
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="wrap-vertical-nav">
														<h2 class="menu-title">Magzine</h2>
														<ul>
															<li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
															<li class="menu-item"><a href="#" class="link-term">Clothing Sets</a><span class="nav-label sale-label">sale</span></li>
															
														</ul>
													</div>
												</div>

												<div class="col-lg-3">
													<div class="wrap-vertical-nav">
														<h2 class="menu-title">Writing Materials/h2>
														<ul>
															<li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
															<li class="menu-item"><a href="#" class="link-term">Footies & Rompers</a></li>
															
														</ul>
													</div>
												</div>

											</div>

											

										</div>
									</div>
								</li>

								<li class="menu-item menu-item-has-children " >
									<a href="#" title="Tools & Equipments" class="link-term mercado-item-title" >Order</a>
									<div class="wrap-megamenu">
										<div class="megamenu-content">

											<div class="row">

												<div class="col-lg-3">
													<div class="wrap-horizontal-nav">
														
														<ul>
															<li class="menu-item"><a href="#" class="link-term">Bodysuits</a></li>
															<li class="menu-item"><a href="#" class="link-term">Clothing Sets</a></li>
															
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
								</li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>