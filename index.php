<?php
    require('header.php');
?>
<main id="main">
    <div class="container">
        <?php require('slider.php'); ?>
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="assets/images/banner/Banner-Stationery-1130x352.jpg" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="assets/images/banner/72365421-stationery-vector-banner-design-concept-flat-style-with-thin-line-art-icons-on-white-background.jpg" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>
        <?php require('product.php'); ?>


        <?php require('fresh.php'); ?>
    </div>
</main>
<?php require('footer.php'); ?>