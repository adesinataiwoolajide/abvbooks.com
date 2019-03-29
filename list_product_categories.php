<?php require('header.php'); 
$genre_name = $_GET['category_name'];
$meth = $genre->getSingleGenreTypeName($genre_name);
$genre_id = $meth['genre_id'];
$totalItems =  count($product->listSingleGensProductS($genre_id));
$itemsPerPage = 10;
$page = isset($_GET['page']) ? ($_GET['page']) : 1;
$start = $page > 1 ? ($page * $itemsPerPage) - $itemsPerPage : 0;
$totalPages = ceil($totalItems / $itemsPerPage);
$listing = $product->getSingleGenProduct($genre_id, $start, $itemsPerPage);
?>
<body class="ecommerce-page shop-page">
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="./" class="link">home</a></li>
                    <li class="item-link"><span><?php echo $genre_name ?> Products</span></li>
                </ul>
            </div>
            <div class="row">

                <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area" style="margin-top: -60px">

                    <div class="banner-shop">
                        <figure><img src="assets/images/new3.jpg" alt="" style="width: "></figure>
                    </div>
                    <?php 
                    if($totalItems ==0){ ?>
                        <div class="product-info col-md-12"> <h3><p style="color: red" align="center"> No Product is Found For 
                            <?php echo $genre_name ?></h3></p> 
                        </div><?php
                    }else{ ?>
                        <div class="wrap-shop-control">
                        
                            <h1 class="shop-title">List of Products For <?php echo $genre_name ?></h1>

                            <div class="wrap-right">

                                <div class="change-display-mode">
                                    <a href="list_product_categories.php?category_name=<?php echo $genre_name ?>" 
                                    class="list-mode display-mode active "><i class="flaticon-interface"></i>List View</a>
                                    <a href="grid_product_categories.php?category_name=<?php echo $genre_name ?>" 
                                    class="grid-mode display-mode "><i class="flaticon-squares"></i>Grid View</a>
                                    
                                </div>

                            </div>

                        </div><!--end wrap shop control-->

                        <ul class="product-list"><?php
                            
                            foreach($listing as $listShop){ ?>
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
                                                
                                                <p style="text-align: justify; text-justify: inter-word;"><?php echo $listShop['description'] ?></p>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="advance-info">
                                            <div class="stock-info in-stock">
                                                <p class="availability">Availability: <span style="color: green">In Stock</span></p>
                                            </div>
                                            <div class="wrap-price"><ins><p class="product-price" style="color: green">
                                                &#8358;<?php echo number_format($listShop['amount']); ?></p></ins> 
                                                <del><p class="product-price" style="color: red"><?php
                                                    $num3= (40/100)*$listShop['amount'];
                                                    $adding2 = $num3 + $listShop['amount']; ?>
                                                    
                                                    &#8358;<?php echo number_format($adding2) ?>
                                                </p></del>
                                            </div>
                                            <form action="handlers/cart/addToCart.php" method="get">
                                                <input type="hidden" name="amount" value="<?php echo $listShop['amount'] ?>">
                                                <input type="hidden" name="slug" value="<?php echo $listShop['slug']; ?>">
                                                <input type="hidden" name="name" value="<?php echo $listShop['product_name']; ?>">
                                                <div class="quantity" style="margin-bottom: 10px">
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
                                            
                                        </div>
                                    </div>
                                </li><?php 
                            } ?>
                        </ul>

                        <div class="wrap-pagination-info">
                             <?php 
                            if($totalItems > 0){ ?>
                                <ul class="page-numbers">
                                    <?php $b = $page - 1;
                                    if($page != 1){ ?>
                                          <li class="prev"><a href="list_product_categories.php?category_name=<?php echo $genre_name ?>&&page=<?php echo $page - 1?>" class="page-number-item prev-link">Previous <i class="fa fa-angle-left"></i></a></li>
                                    <?php } ?>

                                    <?php if($page != $totalPages){ ?>
                                          <li><a href="list_product_categories.php?category_name=<?php echo $genre_name ?>&&page=<?php echo $page + 1?>" class="page-number-item next-link"><i class="fa fa-angle-right"></i> Next</a></li>
                                    <?php } ?>                                        
                                </ul>
                                <p class="result-count">Showing <?php echo $totalItems ?> of <?php echo $itemsPerPage ?> result</p><?php 
                            } ?>
                            
                        </div><?php 
                    } ?>
                </div><!--end main products area-->

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <h2 class="widget-title">All Categories</h2>
                        <div class="widget-content">
                            <ul class="list-category"><?php
                                foreach($type->getAllProductTypeDesc() as $side){ ?>
                                    <li class="category-item has-child-cate">
                                        <a href="#" class="cate-link"><?php echo $side['type_name'] ?></a>
                                        <span class="toggle-control">+</span>
                                        <ul class="sub-cate"><?php
                                            foreach($type->getTypeGenre($type_id) as $see){ $test = $see['genre_name'] ?>
                                                <li class="category-item">
                                                <a href="list_product_categories.php?category_name=<?php echo $test ?>" class="cate-link" >
                                                    <?php echo $test; ?></a>
                                                </li><?php 
                                            } ?>
                                        </ul>
                                    </li><?php
                                } ?>
                                
                                <li class="category-item">
                                    <a href="liat_shop.php" class="cate-link">View All</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Categories widget-->

                    <div class="widget mercado-widget filter-widget brand-widget">
                        <h2 class="widget-title">Product Manufacturer</h2>
                        <div class="widget-content">
                            <ul class="list-style vertical-list list-limited" data-show="10"><?php 
                                foreach($publisher->getAllPublisherSide() as $manu){ ?>
                                    <li class="list-item">
                                        <a class="filter-link" href="manufacturer_products.php?manufacturer_name=<?php echo $manu['publisher_name'] ?>">
                                        <?php echo $manu['publisher_name'] ?></a>
                                    </li><?php 
                                } ?>
                                <li class="list-item default-hiden"><a class="filter-link " href="grid_shop.php">All Manufacturer</a></li>
                                <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- brand widget-->

                    <div class="widget mercado-widget widget-product">
                        <h2 class="widget-title">Category Products </h2>
                        <div class="widget-content">
                            <ul class="products"><?php 
                                $listCat =$product->getSingleGensProductS($genre_id);
                                $category_id = $listCat['category_id'];
                                foreach($product->getSingleCategoryProductSide($category_id) as $listPub){ ?>
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
                    </div><!-- brand widget-->

                </div>

            </div><!--end row-->

        </div><!--end container-->

    </main>

<?php require('footer.php'); ?>