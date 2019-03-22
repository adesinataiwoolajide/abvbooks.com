<?php require('header.php'); 

?>
<body class="ecommerce-page shop-page">
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="./" class="link">home</a></li>
                    <li class="item-link"><span>Digital & Electronics</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    <div class="banner-shop">
                        <a href="#" class="banner-link">
                            <figure><img src="assets/images/stationary 3.jpg" alt="" style="width: "></figure>
                        </a>
                    </div>

                    <div class="wrap-shop-control">

                        <h1 class="shop-title">Digital & Electronics</h1>

                        <div class="wrap-right">

                            <div class="sort-item orderby ">
                                <select name="orderby" class="use-chosen" >
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>

                            <div class="sort-item product-per-page">
                                <select name="post-per-page" class="use-chosen" >
                                    <option value="12" selected="selected">12 per page</option>
                                    <option value="16">16 per page</option>
                                    <option value="18">18 per page</option>
                                    <option value="21">21 per page</option>
                                    <option value="24">24 per page</option>
                                    <option value="30">30 per page</option>
                                    <option value="32">32 per page</option>
                                </select>
                            </div>

                            <div class="change-display-mode">
                                <a href="list_shop.php" class="list-mode display-mode active "><i class="flaticon-interface"></i>List</a>
                                <a href="grid_shop.php" class="grid-mode display-mode "><i class="flaticon-squares"></i>Grid</a>
                                
                            </div>

                        </div>

                    </div><!--end wrap shop control-->

                    <ul class="product-list">
                        <?php 
						foreach($product->getAllProduct() as $listShop){ ?>
                            <li class="wrap-product-list-item ">
                                <div class="product product-list-style">
                                    <div class="product-thumnail">
                                        <a href="product_details.php?slug=<?php echo $listShop['slug'] ?>" title="<?php echo $listShop['product_name'] ?>">
                                            <figure><img src="<?php echo "assets/images/product/".$listShop['image'] ?>" alt="<?php echo $listShop['product_name'] ?>"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span><?php echo $listShop['product_name'] ?></span></a>
                                        <div class="product-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <a href="#" class="count-review"></a>
                                        </div>
                                        <div class="desc">
                                            <ul>
                                                <li><?php echo $listShop['description'] ?></li>
                                                <!-- <li>Dual-core A7 with quad-core graphics</li>
                                                <li>FaceTime HD Camera 7.0 MP Photos</li> -->
                                            </ul>
                                        </div>
                                        <div class="product-attribute">
                                            <ul class="pr-attr color">
                                                <li><span class="attr-red-color"></span></li>
                                                <li><span class="attr-yellow-color"></span></li>
                                                <li><span class="attr-blue-color"></span></li>
                                                <li><span class="attr-black-color"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="advance-info">
                                        <div class="stock-info in-stock">
                                            <p class="availability">Availability: <b>In Stock</b></p>
                                        </div>
                                        <div class="wrap-price"><ins><p class="product-price" style="color: green">
                                            &#8358;<?php echo number_format($listShop['amount']); ?></p></ins> 
                                            <del><p class="product-price" style="color: red">><?php
                                                $num3= (40/100)*$listShop['amount'];
                                                $adding2 = $num3 + $listShop['amount']; ?>
                                                
                                                &#8358;<?php echo number_format($adding2) ?>
                                            </p></del>
                                        </div>
                                        <form action="handlers/cart/addToCart.php" method="get">
                                            <input type="hidden" name="amount" value="<?php echo $listShop['amount'] ?>">
                                            <input type="hidden" name="slug" value="<?php echo $listShop['slug']; ?>">
                                            <input type="hidden" name="name" value="<?php echo $listShop['product_name']; ?>">
                                            <div class="quantity">
                                                <span>Quantity:</span>
                                                <div class="quantity-input"><?php
                                                    $early = 1;
                                                    $current = $listShop['quantity'];
                                                    print '<select class ="form-control" id="frm-login-uname" required name ="quantity">';
                                                    foreach(range($early, $current) as $i){
                                                        print'<option value=" '.$i.'"'.($i === $current ? 'selected="selected"' : '').'>'.$i.'</option>';
                                                    }
                                                    print '</select>';?>
                                                </div>
                                            </div>
                                            <input type="hidden" name="return" value="<?php $_SERVER['REQUEST_URI'] ?>">
                                            <div class="wrap-butons">
                                                <button type="submit" class="btn add-to-cart">Add to Cart
                                                </button>
                                                <!-- <a href="#" class="btn add-to-cart">Add to Cart</a> -->
                                                <div class="wrap-btn">
                                                    <a href="handlers/registration/addit.php?slug=<?php echo $listShop['slug'] ?>&&action=<?php echo 'Compare' ?>" 
                                                        class="btn btn-compare">Add Compare</a>
                                                    <a href="handlers/registration/addit.php?slug=<?php echo $listShop['slug'] ?>&&action=<?php echo 'Wishlist' ?>" 
                                                        class="btn btn-wishlist">Add Wishlist</a>
                                                     
                                                </div>
                                            </div>
                                        </form> 
                                        <!-- <a href="#" class="btn add-to-cart">Add to Cart</a>
                                        <div class="wrap-btn">
                                            <a href="handlers/registration/addit.php?slug=<?php echo $listShop['slug'] ?>&&action=<?php echo 'Compare' ?>" 
                                            class="btn btn-compare">Add Compare</a>
                                            <a href="handlers/registration/addit.php?slug=<?php echo $listShop['slug'] ?>&&action=<?php echo 'Wishlist' ?>" 
                                            class="btn btn-wishlist">Add Wishlist</a>
                                        </div> -->
                                    </div>
                                </div>
                            </li><?php 
                        } ?>
                    </ul>

                    <div class="wrap-pagination-info">
                        <ul class="page-numbers">
                            <li><span class="page-number-item current" >1</span></li>
                            <li><a class="page-number-item" href="#" >2</a></li>
                            <li><a class="page-number-item" href="#" >3</a></li>
                            <li><a class="page-number-item next-link" href="#" >Next</a></li>
                        </ul>
                        <p class="result-count">Showing 1-8 of 12 result</p>
                    </div>
                </div><!--end main products area-->

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category">
                                <li class="category-item has-child-cate">
                                    <a href="#" class="cate-link">Fashion & Accessories</a>
                                    <span class="toggle-control">+</span>
                                    <ul class="sub-cate">
                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                    </ul>
                                </li>
                                <li class="category-item has-child-cate">
                                    <a href="#" class="cate-link">Furnitures & Home Decors</a>
                                    <span class="toggle-control">+</span>
                                    <ul class="sub-cate">
                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                    </ul>
                                </li>
                                <li class="category-item has-child-cate">
                                    <a href="#" class="cate-link">Digital & Electronics</a>
                                    <span class="toggle-control">+</span>
                                    <ul class="sub-cate">
                                        <li class="category-item"><a href="#" class="cate-link">Batteries (22)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Headsets (16)</a></li>
                                        <li class="category-item"><a href="#" class="cate-link">Screen (28)</a></li>
                                    </ul>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="cate-link">Tools & Equipments</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="cate-link">Kid’s Toys</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="cate-link">Organics & Spa</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Brand</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited" data-show="6">
                                <li class="list-item"><a class="filter-link active" href="#">Fashion Clothings</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Laptop Batteries</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Printer & Ink</a></li>
                                <li class="list-item"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Sound & Speaker</a></li>
                                <li class="list-item"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Printer & Ink</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">CPUs & Prosecsors</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Sound & Speaker</a></li>
                                <li class="list-item default-hiden"><a class="filter-link " href="#">Shop Smartphone & Tablets</a></li>
                                <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- brand widget-->

                    <div class="widget mercado-widget filter-widget price-filter">
                        <h2 class="widget-title">Price</h2>
                        <div class="widget-content">
                            <div id="slider-range"></div>
                            <p>
                                <label for="amount">Price:</label>
                                <input type="text" id="amount" readonly >
                                <button class="filter-submit">Filter</button>
                            </p>
                        </div>
                    </div><!-- Price-->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Color</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list has-count-index">
                                <li class="list-item"><a class="filter-link " href="#">Red <span>(217)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Yellow <span>(179)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Black <span>(79)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Blue <span>(283)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Grey <span>(116)</span></a></li>
                                <li class="list-item"><a class="filter-link " href="#">Pink <span>(29)</span></a></li>
                            </ul>
                        </div>
                    </div><!-- Color -->

                    <div class="widget mercado-widget filter-widget">
                        <h2 class="widget-title">Size</h2>
                        <div class="widget-content">
                            <ul class="list-style inline-round ">
                                <li class="list-item"><a class="filter-link active" href="#">s</a></li>
                                <li class="list-item"><a class="filter-link " href="#">M</a></li>
                                <li class="list-item"><a class="filter-link " href="#">l</a></li>
                                <li class="list-item"><a class="filter-link " href="#">xl</a></li>
                            </ul>
                            <div class="widget-banner">
                                <figure><img src="assets/images/size-banner-widget.jpg" width="270" height="331" alt=""></figure>
                            </div>
                        </div>
                    </div><!-- Size -->

                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Popular Products</h2>
                        <div class="widget-content">
                            <ul class="products">
                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="assets/images/products/digital_01.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="assets/images/products/digital_17.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="assets/images/products/digital_18.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item">
                                    <div class="product product-widget-style">
                                        <div class="thumbnnail">
                                            <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                                <figure><img src="assets/images/products/digital_20.jpg" alt=""></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker...</span></a>
                                            <div class="wrap-price"><span class="product-price">$168.00</span></div>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div><!-- brand widget-->

                </div><!--end sitebar-->

            </div><!--end row-->

        </div><!--end container-->

    </main>

<?php require('footer.php'); ?>