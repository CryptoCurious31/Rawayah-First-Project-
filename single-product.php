<?php
get_header();
/* Template Name: Single Product Page */
$prices = get_field('products_info');
$gallery = $prices['gallery'];
?>

<section class="single-product-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="single-product-image">
                    <img src="<?php echo get_template_directory_uri() . '/Props/Black Beiger/01251220_600x.jpg' ?>"
                        alt="">
                </div>
                <div class="image-gallery py-4">
                    <div class="row ">
                        <?php 
                        foreach($gallery as $image){
                        ?>
                        <div class="col-lg-3">
                        <?php print_r($image)?> 
                            <a href=""
                                data-fancybox="gallery" data-caption="Single image">
                                <img src=" <?php echo $image['url'] ?>"
                                    alt="">
                            </a>
                        </div>
                        <?php 
                        }
                        ?>
                        <!-- <div class="col-lg-3">
                            <a href="<?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                data-fancybox="gallery" data-caption="Single image">
                                <img src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="<?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                data-fancybox="gallery" data-caption="Single image">
                                <img src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <a href="<?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                data-fancybox="gallery" data-caption="Single image">
                                <img src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                    alt="">
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-product-info">
                    <h1><?php echo the_title(); ?></h1>
                    <p class="pt"><?php echo the_content(); ?></p>
                    <div style="padding-top: 0;" class="product-title">
                        <p class="text-align">$<?php echo $prices['actual_price']; ?>
                            <strike>$<?php echo $prices['Price']; ?></strike>
                        </p>
                    </div>
                    <div class="checkout-buttons">
                        <a href="#">Buy Now</a>
                        <a href="#">Add to cart</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
get_footer();
?>

<!-- <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Home</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Contact</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled"
                                aria-selected="false" disabled>Disabled</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">Home</div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">Tabs</div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab" tabindex="0">Action</div>
                        <div class="tab-pane fade" id="pills-disabled" role="tabpanel"
                            aria-labelledby="pills-disabled-tab" tabindex="0">hjgkj</div>
                    </div> -->