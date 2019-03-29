<?php 
    include('newheader.php');
?>

	<!--main area-->
	<main id="main" class="main-site">
		<?php include 'newslider.php'; ?><!--end container-->

        <div class="container">

            <!-- BANNER -->
            <div class="slide-banners slide-banner-first">
                <div class="slide-carousel owl-carousel style-nav-1"
                     data-items="3"
                     data-loop="true"
                     data-autoplay="true"
                     data-autoplayTimeout="3000"
                     data-autoplaySpeed="1200"
                     data-autoplayHoverPause="true"
                     data-nav="true"
                     data-dots="false"
                     data-margin="30"
                     data-responsive='{"0":{"items":"1"},"550":{"items":"2"},"768":{"items":"2"},"992":{"items":"3"},"1200":{"items":"3"}}'>
                    <div class="banner-item">
                        <a href="#" class="link-banner banner-effect-1">
                            <figure><img src="assets/images/home-3-banner-1.jpg" alt="" width="370" height="190"></figure>
                        </a>
                    </div>
                    <div class="banner-item">
                        <a href="#" class="link-banner banner-effect-1">
                            <figure><img src="assets/images/home-3-banner-2.jpg" alt="" width="370" height="190"></figure>
                        </a>
                    </div>
                    <div class="banner-item">
                        <a href="#" class="link-banner banner-effect-1">
                            <figure><img src="assets/images/home-2-banner-3.jpg" alt="" width="370" height="190"></figure>
                        </a>
                    </div>
                </div>
            </div>

            <!-- PRODUCT DEAL-->
            <div class="wrap-show-advance-info-box style-3 ">
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-3">
                        <div class="tab-control">
                            <a href="#deal-01" class="tab-control-item active">Featured Products</a>
                            <a href="#deal-02" class="tab-control-item">Best Seller</a>
                            <a href="#deal-03" class="tab-control-item">Top Rated</a>
                        </div>
                        <div class="tab-contents">

                            <div class="tab-content-item active" id="deal-01">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                     data-items="5"
                                     data-loop="false"
                                     data-nav="true"
                                     data-dots="false"
                                     data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
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

                            <div class="tab-content-item" id="deal-02">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                     data-items="5"
                                     data-loop="false"
                                     data-nav="true"
                                     data-dots="false"
                                     data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

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

                            <div class="tab-content-item" id="deal-03">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                     data-items="5"
                                     data-loop="false"
                                     data-nav="true"
                                     data-dots="false"
                                     data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

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

                        </div>
                    </div>
                </div>
            </div>

            <!--Digital & Electronics-->
            <div class="wrap-combined-box">

                <div class="box-item wrap-show-advance-info-box style-1">
                    <h3 class="title-box">Digital & Electronics</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="assets/images/3-digital-electronic-banner.jpg" width="870" height="240" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-products">
                        <div class="wrap-product-tab tab-style-1 ">
                            <div class="tab-control">
                                <a href="#digital_1a" class="tab-control-item active">All Products</a>
                                <a href="#digital_1b" class="tab-control-item">Best Seller</a>
                                <a href="#digital_1c" class="tab-control-item">New Arrivals</a>
                                <a href="#digital_1d" class="tab-control-item">Top Rated</a>
                            </div>
                            <div class="tab-contents tab-not-equal">

                                <div class="tab-content-item active" id="digital_1a">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_17.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_15.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_01.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_21.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectiona</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="digital_1b">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_10.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_11.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_12.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_13.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="digital_1c">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_14.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_15.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_16.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_17.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_18.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_19.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_20.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_21.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="digital_1d">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_16.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_18.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_22.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_13.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_18.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/digital_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item wrap-product-widget">
                    <h3 class="title-box">Bestseller Products</h3>
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
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
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
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
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
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/digital_21.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/digital_22.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="funtion-item">
                                <a href="#" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!--Tool & Equipments-->
            <div class="wrap-combined-box">

                <div class="box-item wrap-show-advance-info-box style-1">
                    <h3 class="title-box">Tool & Equipments</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="assets/images/3-carpenter-tools-banner.jpg" width="870" height="240" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-products">
                        <div class="wrap-product-tab tab-style-1">
                            <div class="tab-control">
                                <a href="#tool_1a" class="tab-control-item active">All Products</a>
                                <a href="#tool_1b" class="tab-control-item">Best Seller</a>
                                <a href="#tool_1c" class="tab-control-item">New Arrivals</a>
                                <a href="#tool_1d" class="tab-control-item">Top Rated</a>
                            </div>
                            <div class="tab-contents tab-not-equal">

                                <div class="tab-content-item active" id="tool_1a">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_7.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_3.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_4.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_8.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_1.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_2.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_5.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_6.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="tool_1b">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_6.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_5.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_4.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_3.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_2.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_1.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_8.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_7.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="tool_1c">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_8.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_7.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_6.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_5.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_4.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_3.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_2.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_1.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="tool_1d">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_1.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_2.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_3.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_4.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_5.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_6.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_7.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/tools_equipment_8.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item wrap-product-widget">
                    <h3 class="title-box">Bestseller Products</h3>
                    <div class="widget-content">
                        <ul class="products">
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/tools_equipment_7.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/tools_equipment_1.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/tools_equipment_3.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/tools_equipment_4.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/tools_equipment_5.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="funtion-item">
                                <a href="#" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!--Fashion & Accessories-->
            <div class="wrap-combined-box">

                <div class="box-item wrap-show-advance-info-box style-1">
                    <h3 class="title-box">Fashion & Accessories</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="assets/images/3-fashion-banner-1.jpg" width="870" height="240" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-products">
                        <div class="wrap-product-tab tab-style-1">
                            <div class="tab-control">
                                <a href="#fashion_1a" class="tab-control-item active">All Products</a>
                                <a href="#fashion_1b" class="tab-control-item">Best Seller</a>
                                <a href="#fashion_1c" class="tab-control-item">New Arrivals</a>
                                <a href="#fashion_1d" class="tab-control-item">Top Rated</a>
                            </div>
                            <div class="tab-contents tab-not-equal">

                                <div class="tab-content-item active" id="fashion_1a">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_01.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lois Caron LCS-4027 Analog Watch - For Men</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Business Men Leather Laptop Tote Bags Man Crossbody </span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="fashion_1b">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="fashion_1c">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_07.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="fashion_1d">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_05.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_04.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_03.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_02.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_01.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_08.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/fashion_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="#" class="count-review">(05 review)</a>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item wrap-product-widget">
                    <h3 class="title-box">Bestseller Products</h3>
                    <div class="widget-content">
                        <ul class="products">
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/fashion_01.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/fashion_02.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/fashion_10.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/fashion_08.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/fashion_05.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="funtion-item">
                                <a href="#" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!--Furniture & home decor-->
            <div class="box-item wrap-combined-box">

                <div class="box-item wrap-show-advance-info-box style-1">
                    <h3 class="title-box">Furniture & home decor</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="assets/images/3-furniture-and-home-decors-banner.jpg" width="870" height="240" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-products">
                        <div class="wrap-product-tab tab-style-1">
                            <div class="tab-control">
                                <a href="#furniture_1a" class="tab-control-item active">All Products</a>
                                <a href="#furniture_1b" class="tab-control-item">Best Seller</a>
                                <a href="#furniture_1c" class="tab-control-item">New Arrivals</a>
                                <a href="#furniture_1d" class="tab-control-item">Top Rated</a>
                            </div>
                            <div class="tab-contents tab-not-equal">

                                <div class="tab-content-item active" id="furniture_1a">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/furniture_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Field Lounge Chair</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Table Lamp Bulb  With Ikea Lykta ">
                                                    <figure><img src="assets/images/products/furniture_07.jpg" width="800" height="800" alt="Table Lamp Bulb  With Ikea Lykta "></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Table Lamp Bulb With Ikea Lykta</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Furniture Lovely Wooden Curved Shape Dressing">
                                                    <figure><img src="assets/images/products/furniture_08.jpg" width="800" height="800" alt="Furniture Lovely Wooden Curved Shape Dressing"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Furniture Lovely Wooden Curved Shape Dressing</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Dimora Black Queen Bed">
                                                    <figure><img src="assets/images/products/furniture_06.jpg" width="800" height="800" alt="Dimora Black Queen Bed"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Dimora Black Queen Bed</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Lydia Cuddler Sofa Lydia House Beautiful">
                                                    <figure><img src="assets/images/products/furniture_05.jpg" width="800" height="800" alt="Lydia Cuddler Sofa Lydia House "></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lydia Cuddler Sofa Lydia House </span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Furniture Lovely Wooden Curved Shape Dressing">
                                                    <figure><img src="assets/images/products/furniture_03.jpg" width="800" height="800" alt="Furniture Lovely Wooden Curved Shape Dressing"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Furniture Lovely Wooden Curved Shape Dressing</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Lydia Cuddler Sofa Lydia House Beautiful">
                                                    <figure><img src="assets/images/products/furniture_02.jpg" width="800" height="800" alt="Lydia Cuddler Sofa Lydia House Beautiful"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lydia Cuddler Sofa Lydia House Beautiful</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Dimora Black Queen Bed">
                                                    <figure><img src="assets/images/products/furniture_01.jpg" width="800" height="800" alt="Dimora Black Queen Bed"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Dimora Black Queen Bed</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="furniture_1b">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/furniture_09.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Field Lounge Chair</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Table Lamp Bulb  With Ikea Lykta ">
                                                    <figure><img src="assets/images/products/furniture_08.jpg" width="800" height="800" alt="Table Lamp Bulb  With Ikea Lykta "></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Table Lamp Bulb With Ikea Lykta</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Furniture Lovely Wooden Curved Shape Dressing">
                                                    <figure><img src="assets/images/products/furniture_07.jpg" width="800" height="800" alt="Furniture Lovely Wooden Curved Shape Dressing"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Furniture Lovely Wooden Curved Shape Dressing</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Dimora Black Queen Bed">
                                                    <figure><img src="assets/images/products/furniture_06.jpg" width="800" height="800" alt="Dimora Black Queen Bed"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Dimora Black Queen Bed</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Lydia Cuddler Sofa Lydia House Beautiful">
                                                    <figure><img src="assets/images/products/furniture_05.jpg" width="800" height="800" alt="Lydia Cuddler Sofa Lydia House "></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lydia Cuddler Sofa Lydia House </span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Furniture Lovely Wooden Curved Shape Dressing">
                                                    <figure><img src="assets/images/products/furniture_04.jpg" width="800" height="800" alt="Furniture Lovely Wooden Curved Shape Dressing"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Furniture Lovely Wooden Curved Shape Dressing</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Lydia Cuddler Sofa Lydia House Beautiful">
                                                    <figure><img src="assets/images/products/furniture_03.jpg" width="800" height="800" alt="Lydia Cuddler Sofa Lydia House Beautiful"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lydia Cuddler Sofa Lydia House Beautiful</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Dimora Black Queen Bed">
                                                    <figure><img src="assets/images/products/furniture_02.jpg" width="800" height="800" alt="Dimora Black Queen Bed"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Dimora Black Queen Bed</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="furniture_1c">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/furniture_06.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Field Lounge Chair</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Table Lamp Bulb  With Ikea Lykta ">
                                                    <figure><img src="assets/images/products/furniture_05.jpg" width="800" height="800" alt="Table Lamp Bulb  With Ikea Lykta "></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Table Lamp Bulb With Ikea Lykta</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Furniture Lovely Wooden Curved Shape Dressing">
                                                    <figure><img src="assets/images/products/furniture_04.jpg" width="800" height="800" alt="Furniture Lovely Wooden Curved Shape Dressing"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Furniture Lovely Wooden Curved Shape Dressing</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Dimora Black Queen Bed">
                                                    <figure><img src="assets/images/products/furniture_03.jpg" width="800" height="800" alt="Dimora Black Queen Bed"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Dimora Black Queen Bed</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Lydia Cuddler Sofa Lydia House Beautiful">
                                                    <figure><img src="assets/images/products/furniture_02.jpg" width="800" height="800" alt="Lydia Cuddler Sofa Lydia House "></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lydia Cuddler Sofa Lydia House </span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Furniture Lovely Wooden Curved Shape Dressing">
                                                    <figure><img src="assets/images/products/furniture_01.jpg" width="800" height="800" alt="Furniture Lovely Wooden Curved Shape Dressing"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Furniture Lovely Wooden Curved Shape Dressing</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Lydia Cuddler Sofa Lydia House Beautiful">
                                                    <figure><img src="assets/images/products/furniture_09.jpg" width="800" height="800" alt="Lydia Cuddler Sofa Lydia House Beautiful"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lydia Cuddler Sofa Lydia House Beautiful</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="#" title="Dimora Black Queen Bed">
                                                    <figure><img src="assets/images/products/furniture_07.jpg" width="800" height="800" alt="Dimora Black Queen Bed"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Dimora Black Queen Bed</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="furniture_1d">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                         data-items="4"
                                         data-loop="false"
                                         data-nav="true"
                                         data-dots="false"
                                         data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                        <div class="product product-style-2 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="assets/images/products/furniture_01.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Field Lounge Chair</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="#" title="Table Lamp Bulb  With Ikea Lykta ">
                                                    <figure><img src="assets/images/products/furniture_02.jpg" width="800" height="800" alt="Table Lamp Bulb  With Ikea Lykta "></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Table Lamp Bulb With</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="#" title="Furniture Lovely Wooden Curved Shape Dressing">
                                                    <figure><img src="assets/images/products/furniture_03.jpg" width="800" height="800" alt="Furniture Lovely Wooden Curved Shape Dressing"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Furniture Lovely Wooden</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="#" title="Dimora Black Queen Bed">
                                                    <figure><img src="assets/images/products/furniture_04.jpg" width="800" height="800" alt="Dimora Black Queen Bed"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Dimora Black Queen Bed</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="#" title="Lydia Cuddler Sofa Lydia House Beautiful">
                                                    <figure><img src="assets/images/products/furniture_05.jpg" width="800" height="800" alt="Lydia Cuddler Sofa Lydia House "></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lydia Cuddler Sofa</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="#" title="Furniture Lovely Wooden Curved Shape Dressing">
                                                    <figure><img src="assets/images/products/furniture_06.jpg" width="800" height="800" alt="Furniture Lovely Wooden Curved Shape Dressing"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Furniture Lovely Wooden</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="#" title="Lydia Cuddler Sofa Lydia House Beautiful">
                                                    <figure><img src="assets/images/products/furniture_08.jpg" width="800" height="800" alt="Lydia Cuddler Sofa Lydia House Beautiful"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lydia Cuddler Sofa</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem">
                                            <div class="product-thumnail">
                                                <a href="#" title="Dimora Black Queen Bed">
                                                    <figure><img src="assets/images/products/furniture_09.jpg" width="800" height="800" alt="Dimora Black Queen Bed"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Dimora Black Queen Bed</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-item wrap-product-widget">
                    <h3 class="title-box">Bestseller Products</h3>
                    <div class="widget-content">
                        <ul class="products">
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/furniture_01.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/furniture_02.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/furniture_03.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/furniture_04.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="#" title="Radiant-360 R6 Wireless Omnidirectional Speaker [White]">
                                            <figure><img src="assets/images/products/furniture_07.jpg" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional...</span></a>
                                        <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                    </div>
                                </div>
                            </li>
                            <li class="funtion-item">
                                <a href="#" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            
            <!--BRAND SLIDER -->
            <div class="wrap-brands">
                <div class="slide-carousel owl-carousel style-nav-1"
                     data-margin="1"
                     data-items="5"
                     data-loop="0"
                     data-nav="true"
                     data-dots="false"
                     data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                    <div class="brand-item first-child">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/codecanyon.jpg" alt="codecanyon" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/audiojungle.jpg" alt="audiojungle" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/themeforest.jpg" alt="themeforest" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/graphicriver.jpg" alt="graphicriver" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/photodune.jpg" alt="photodune" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/codecanyon.jpg" alt="codecanyon" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/audiojungle.jpg" alt="audiojungle" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/themeforest.jpg" alt="themeforest" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/graphicriver.jpg" alt="graphicriver" width="233" height="125"></figure>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#" class="link-brand">
                            <figure><img src="assets/images/brands/photodune.jpg" alt="photodune" width="233" height="125"></figure>
                        </a>
                    </div>
                </div>
            </div>

        </div><!--end container-->

	</main>
	<!--main area-->

	<!--footer area-->
    <footer id="footer">
        <div class="wrap-footer-content footer-style-1">

            <div class="wrap-function-info">
                <div class="container">
                    <ul>
                        <li class="fc-info-item">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Free Shipping</h4>
                                <p class="fc-desc">Free On Oder Over $99</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-recycle" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Guarantee</h4>
                                <p class="fc-desc">30 Days Money Back</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Safe Payment</h4>
                                <p class="fc-desc">Safe your online payment</p>
                            </div>

                        </li>
                        <li class="fc-info-item">
                            <i class="fa fa-life-ring" aria-hidden="true"></i>
                            <div class="wrap-left-info">
                                <h4 class="fc-name">Online Suport</h4>
                                <p class="fc-desc">We Have Support 24/7</p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
            <!--End function info-->

            <div class="main-footer-content">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Contact Details</h3>
                                <div class="item-content">
                                    <div class="wrap-contact-detail">
                                        <ul>
                                            <li>
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="contact-txt">45 Grand Central Terminal New York,NY 1017 United State USA</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="contact-txt">(+123) 456 789 - (+123) 666 888</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="contact-txt">Contact@yourcompany.com</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <p class="contact-txt">Mon-Sat 9:00pm - 5:00pm Sun:Closed</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                            <div class="wrap-footer-item">
                                <h3 class="item-header">Hot Line</h3>
                                <div class="item-content">
                                    <div class="wrap-hotline-footer">
                                        <span class="desc">Call Us toll Free</span>
                                        <b class="phone-number">(+123) 456 789 - (+123) 666 888</b>
                                    </div>
                                </div>
                            </div>

                            <div class="wrap-footer-item footer-item-second">
                                <h3 class="item-header">Sign up for newsletter</h3>
                                <div class="item-content">
                                    <div class="wrap-newletter-footer">
                                        <form action="#" class="frm-newletter" id="frm-newletter">
                                            <input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
                                            <button class="btn-submit">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content">
                            <div class="row">
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">My Account</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">My Account</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Brands</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Gift Certificates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Affiliates</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Wish list</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-footer-item twin-item">
                                    <h3 class="item-header">Infomation</h3>
                                    <div class="item-content">
                                        <div class="wrap-vertical-nav">
                                            <ul>
                                                <li class="menu-item"><a href="#" class="link-term">Contact Us</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Returns</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Order History</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">We Using Safe Payments:</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item wrap-gallery">
                                        <ul>
                                            <li><a href="#" class="link-to-item"><figure><img src="assets/images/brands/american-express.jpg" alt="american express"></figure></a></li>
                                            <li><a href="#" class="link-to-item"><figure><img src="assets/images/brands/paypal.jpg" alt="paypal"></figure></a></li>
                                            <li><a href="#" class="link-to-item"><figure><img src="assets/images/brands/visa.jpg" alt="paypal"></figure></a></li>
                                            <li><a href="#" class="link-to-item"><figure><img src="assets/images/brands/master-card.jpg" alt="master card"></figure></a></li>
                                            <li><a href="#" class="link-to-item"><figure><img src="assets/images/brands/discover.jpg" alt="discovery"></figure></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Social network</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item social-network">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <div class="wrap-footer-item">
                                <h3 class="item-header">Dowload App</h3>
                                <div class="item-content">
                                    <div class="wrap-list-item apps-list">
                                        <ul>
                                            <li><a href="#" class="link-to-item" title="our application on apple store"><figure><img src="assets/images/brands/apple-store.png" alt="apple store" width="128" height="36"></figure></a></li>
                                            <li><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="assets/images/brands/google-play-store.png" alt="google play store" width="128" height="36"></figure></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wrap-back-link">
                    <div class="container">
                        <div class="back-link-box">
                            <h3 class="backlink-title">Quick Links</h3>
                            <div class="back-link-row">
                                <ul class="list-back-link" >
                                    <li><span class="row-title">Mobiles:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="mobile">Mobiles</a></li>
                                    <li><a href="#" class="redirect-back-link" title="yphones">YPhones</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Gianee Mobiles GL</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Mobiles Karbonn</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Viva">Mobiles Viva</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Intex">Mobiles Intex</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Micrumex">Mobiles Micrumex</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Bsus">Mobiles Bsus</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Samsyng">Mobiles Samsyng</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Mobiles Lenova">Mobiles Lenova</a></li>
                                </ul>

                                <ul class="list-back-link" >
                                    <li><span class="row-title">Tablets:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="Plesc YPads">Plesc YPads</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Samsyng Tablets" >Samsyng Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Qindows Tablets" >Qindows Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Calling Tablets" >Calling Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Micrumex Tablets" >Micrumex Tablets</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus" >Lenova Tablets Bsus</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets iBall" >Tablets iBall</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets Swipe" >Tablets Swipe</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Tablets TVs, Audio" >Tablets TVs, Audio</a></li>
                                </ul>

                                <ul class="list-back-link" >
                                    <li><span class="row-title">Fashion:</span></li>
                                    <li><a href="#" class="redirect-back-link" title="Sarees Silk" >Sarees Silk</a></li>
                                    <li><a href="#" class="redirect-back-link" title="sarees Salwar" >sarees Salwar</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Suits Lehengas" >Suits Lehengas</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Biba Jewellery" >Biba Jewellery</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Rings Earrings" >Rings Earrings</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Diamond Rings" >Diamond Rings</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes" >Loose Diamond Shoes</a></li>
                                    <li><a href="#" class="redirect-back-link" title="BootsMen Watches" >BootsMen Watches</a></li>
                                    <li><a href="#" class="redirect-back-link" title="Women Watches" >Women Watches</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="coppy-right-box">
                <div class="container">
                    <div class="coppy-right-item item-left">
                        <p class="coppy-right-text">Copyright © 2017 <a href="#" class="link-to-home">Mercado</a>. All rights reserved</p>
                    </div>
                    <div class="coppy-right-item item-right">
                        <div class="wrap-nav horizontal-nav">
                            <ul>
                                <li class="menu-item"><a href="#" class="link-term">About us</a></li>
                                <li class="menu-item"><a href="#" class="link-term">Customer Service</a></li>
                                <li class="menu-item"><a href="#" class="link-term">Privacy Policy</a></li>
                                <li class="menu-item"><a href="#" class="link-term">Site Map</a></li>
                                <li class="menu-item"><a href="#" class="link-term">Search Terms</a></li>
                                <li class="menu-item"><a href="#" class="link-term">Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </footer>
    <script src='assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4'></script>
    <script src='assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4'></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/functions.js"></script>
    <!--footer area-->
</body>

<!-- Mirrored from kute-themes.com/html/mercado/home-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Jan 2019 11:56:50 GMT -->
</html>