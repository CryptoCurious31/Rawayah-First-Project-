<?php
get_header();
/* Template Name: Single Product Page */
?>
<?php echo the_title(); ?>

<section class="single-product-page">
    <div class="container-fluid">
        <div class="col-lg-6">
            <div class="-single-product-image">
                <img src="<?php echo get_template_directory_uri() . '/Props/Black Beiger/01251220_600x.jpg' ?>" alt="">
            </div>
            <div class="image-gallery">
                <div class="container-images">
                    <div class="col-lg-3">
                        <a href="#">
                            <img src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#">
                            <img src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#">
                            <img src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                alt="">
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#">
                            <img src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/01251222_600x.jpg' ?>"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="single-product-info">

            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>