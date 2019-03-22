<div class="wrap-show-advance-info-box style-1 has-countdown">
    <h3 class="title-box">HOT DEALS</h3>
    <div class="wrap-countdown mercado-countdown" data-expire="2019/02/02 12:34:56"></div>
    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

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