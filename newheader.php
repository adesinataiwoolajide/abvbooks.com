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
	<title>Home 03</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color-03.css">
</head>
<body class="home-page home-03 ">

    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<header id="header" class="header header-style-3 header-toggle fill-color">
        <div class="container-fluid">
            <div class="row">
                

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
                            <ul>
                                <li class="menu-item" ><a title="Register or Login" href="#">Register or Login</a></li>
                                <li class="menu-item" ><a title="Newsletter" href="#">Newsletter</a></li>
                                <li class="menu-item" ><a title="Store Location" href="#">Store Location</a></li>
                                <li class="menu-item" ><a title="About" href="#">About</a></li>
                                <li class="menu-item lang-menu menu-item-has-children parent">
                                    <a title="English" href="#"><span class="img label-before"><img src="assets/images/lang-en.png" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu lang" >
                                        <li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="assets/images/lang-hun.png" alt="lang-hun"></span>Hungary</a></li>
                                        <li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="assets/images/lang-ger.png" alt="lang-ger" ></span>German</a></li>
                                        <li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="assets/images/lang-fra.png" alt="lang-fre"></span>French</a></li>
                                        <li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="assets/images/lang-can.png" alt="lang-can"></span>Canada</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children parent" >
                                    <a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="submenu curency" >
                                        <li class="menu-item" >
                                            <a title="Pound (GBP)" href="#">Pound (GBP)</a>
                                        </li>
                                        <li class="menu-item" >
                                            <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                                        </li>
                                        <li class="menu-item" >
                                            <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="mid-section main-info-area">    
                        <div class="wrap-logo-top left-section">
                            <a href="home-02.html" class="link-to-home"><img src="assets/images/abv.png" alt="mercado"></a>
                        </div>

                        <div class="wrap-search center-section">
                            <div class="wrap-search-form">
                                <form action="#" id="form-search-top" name="form-search-top">
                                    <input type="text" name="search" value="" placeholder="Search here...">
                                    <button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <div class="wrap-list-cate">
                                        <input type="hidden" name="product-cate" value="0" id="product-cate">
                                        <a href="#" class="link-control">All Category</a>
                                        <ul class="list-cate">
                                            <li class="level-0">All Category</li>
                                            <?php 
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
                            <div class="wrap-icon-section minicart">
                                <a href="#" class="link-direction">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <div class="left-info">
                                        <span class="index">4 items</span>
                                        <span class="title">CART</span>
                                    </div>
                                </a>
                            </div>
                            <div class="wrap-icon-section show-up-after-1024">
                                <a href="#" class="mobile-navigation">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nav-section header-sticky">
                    <div class="container">
                        <div class="primary-nav-section vertical-menu-toggle default-toggle ">
                            <div class="wrap-toggle-menu close-menu">
                                <div class="hamburger"><span></span><span></span><span></span></div>
                                <label>All Categories</label><i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                            <ul class="nav primary clone-main-menu toggle-slide-menu" id="mercado_main" data-menuname="Main menu" >
                                <li class="menu-item sale-panel"><a href="#" class="link-term">Hot Sale</a><span class="nav-label hot-label">hot</span></li><?php 
                                foreach($type->getAllProductType() as $listType){ 
                                    $type_id = $listType['type_id']; ?>
                                
                                    <li class="menu-item menu-item-has-children ">
                                        <a href="#" class="link-term mercado-item-title"><?php echo $listType['type_name'] ?></a>
                                        <ul class="submenu"><?php
                                           
                                            foreach($type->getTypeGenre($type_id) as $see){ ?>
                                                <li class="menu-item"><a href="" class="link-term"><?php 
                                                 echo $see['genre_name']; ?></a></li><?php
                                            
                                            } ?>
                                            
                                        </ul>
                                    </li><?php 
                                } ?>
                                <li class="btn-control"><a href="#">All categories<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>

                            </ul>
                        </div>
                        <div class="header-nav-section">
                            <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
                                <?php  
                                foreach($type->getAllProductType() as $seeType){ ?>
                                    <li class="menu-item">
                                        <a href="./" title="Fashion & Accessories" class="link-term mercado-item-title"><?php echo $seeType['type_name']; ?></a>
                                    </li><?php 
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>