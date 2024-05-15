<?php get_header();
/* Template Name: Home Template */
$hero_section_slides = get_field('hero_section_slides');
$testimonials = get_field('testimonials');
?>

<!-- ======== image carousel code start =========== -->
<section class="carousel">
    <div class="container-fluid px-0 ">
        <div class="hero-section-slider">
            <?php
            if ($hero_section_slides) {
                foreach ($hero_section_slides as $hero_section_slide) {
                    ?>
                    <div class="row align-items-center" style="display:flex">
                        <div class="col-lg-6">
                            <div class="text">
                                <div class="textAndHeadings">
                                    <p class="subtext2"><?php echo $hero_section_slide['sub_heading']; ?></p>
                                    <h3 class="mainHeading">
                                        <?php echo $hero_section_slide['heading']; ?>
                                    </h3>
                                    <p class="slogan"><?php echo $hero_section_slide['description']; ?></p>
                                    <div class="button">
                                        <a class="btn" href="#">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image">
                                <img src=" <?php echo $hero_section_slide['image']['url']; ?> " alt="">
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>



    </div>
</section>

<!-- ======== All Product Section -->
<section class="allProduct">
    <div class="container">
        <h3 class="premium">All Products</h3>
        <div class="row categories">
            <div class="col">
                <div class="category">
                    <a class="imageTwo forDisplay" href="#"><img
                            src="<?php echo get_template_directory_uri() . '/Props/Hocks/Sleepers.jpg' ?> "
                            alt="CourtShoes" srcset=""></a>
                    <h3><a href="#">All Product</a></h3>
                </div>
            </div>
            <div class="col">
                <div class="category">
                    <a class="imageTwo forDisplay" href="#"><img
                            src="<?php echo get_template_directory_uri() . '/Props/Hocks/BHH-1040-WHITE-1.jpg' ?> "
                            alt="CourtShoes" srcset=""></a>
                    <h3><a href="#">CourtShoes</a></h3>
                </div>

            </div>
            <div class="col">
                <div class="category">
                    <a class="imageTwo forDisplay" href="#"><img
                            src="<?php echo get_template_directory_uri() . '/Props/Hocks/BHH-1073-BLACK-1.jpg' ?> "
                            alt="CourtShoes" srcset=""></a>
                    <h3><a href="#">Mules</a></h3>
                </div>

            </div>
            <div class="col">
                <div class="category">
                    <a class="imageTwo forDisplay" href="#"><img
                            src="<?php echo get_template_directory_uri() . '/Props/Hocks/BHH-1078-MUSTARD-2.jpg' ?> "
                            alt="CourtShoes" srcset=""></a>
                    <h3><a href="#">Sandals</a></h3>
                </div>

            </div>
            <div class="col">
                <div class="category">
                    <a class="imageTwo forDisplay" href="#"><img
                            src="<?php echo get_template_directory_uri() . '/Props/Hocks/FLT-218-MAROON2.jpg' ?> "
                            alt="CourtShoes" srcset=""></a>
                    <h3><a href="#">Khussa</a></h3>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ================ Premium Designs Section ============== -->
<section class="staticPicture">
    <h3 class="premium">Premium Designs</h3>
    <img class="pic"
        src=" <?php echo get_template_directory_uri() . '/Props/Black Beiger/2_f34a9104-6a46-414c-a148-06bc7a21b0fd_1000x.jpg' ?> " />
</section>

<section class='product-slider '>
    <h3 class="premium">Featured Collection</h3>
    <div class="container">
        <div class="row product-slider1">
            <?php
            $args = array(
                'post_type' => 'product', // Custom post type key
                'posts_per_page' => -1, // -1 to retrieve all posts, you can adjust this number
            );

            $products_query = new WP_Query($args);

            if ($products_query->have_posts()):
                while ($products_query->have_posts()):
                    $products_query->the_post();
                    // Inside the loop, you can render each product post as needed
                    $product_info = get_field('products_info');
                    ?>
                    <div class="product-slide">
                        <div class="product-item">
                            <div class="product-img">
                                <a href="<?php the_permalink(); ?>" class="product-link"> <!-- Add the permalink -->

                                    <img src="<?php echo $product_info['image']['url']; ?>" alt="">
                                    <img src="<?php echo $product_info['hover_image']['url']; ?>" alt="">
                                </a>
                            </div>
                            <div class="product-title">
                                <h4><?php the_title(); ?></h4>
                                <p>$<?php echo $product_info['actual_price']; ?>
                                    <strike>$<?php echo $product_info['Price']; ?></strike>
                                </p>
                            </div>
                            <div class="sizing">
                                <div class="size">32</div>
                                <div class="size">33</div>
                                <div class="size">34</div>
                                <div class="size">35</div>
                                <div class="size">36</div>
                                <div class="size">37</div>
                                <div class="size">38</div>
                                <div class="size">39</div>
                                <div class="size">40</div>
                                <div class="size">41</div>
                                <div class="size">42</div>
                                <div class="size">43</div>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata(); // Reset post data
            else:
                // If no products are found
                echo 'No products found.';
            endif;
            ?>



        </div>

    </div>
    </div>
</section>

<!-- ========= Testomonial Section ======== -->
<section class="testomonial">
    <div class="container">
        <div class="row testimonial-slider">
            <?php
            if ($testimonials) {
                foreach ($testimonials as $testimonial) {
                    ?>
                    <div class="col-lg-3">
                        <div class="testimonial">
                            <div class="body">“<?php echo $testimonial['testimonial']; ?>”</div>
                            <div class="rating">
                                <ul>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="author">
                                <span class="review-item__avatar-initial"><?php echo $testimonial['initial']; ?></span>
                                <p><?php echo $testimonial['author_name']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
            <!-- <div class="col-lg-3">
            <div class="testimonial">
                    <div class="body">“Very Good Product”</div>
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="author">
                    <span class="review-item__avatar-initial">Ag</span>    
                    <p>Zain Ahmed</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="testimonial">
                    <div class="body">“Very Good Product”</div>
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="author">
                    <span class="review-item__avatar-initial">Ag</span>    
                    <p>Zain Ahmed</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="testimonial">
                    <div class="body">“Very Good Product”</div>
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="author">
                    <span class="review-item__avatar-initial">Ag</span>    
                    <p>Zain Ahmed</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="testimonial">
                    <div class="body">“Very Good Product”</div>
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="author">
                    <span class="review-item__avatar-initial">Ag</span>    
                    <p>Zain Ahmed</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="testimonial">
                    <div class="body">“Very Good Product”</div>
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="author">
                    <span class="review-item__avatar-initial">Ag</span>    
                    <p>Zain Ahmed</p>
                </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="testimonial">
                    <div class="body">“Very Good Product”</div>
                    <div class="rating">
                        <ul>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                    </div>
                    <div class="author">
                    <span class="review-item__avatar-initial">Ag</span>    
                    <p>Zain Ahmed</p>
                </div>
                </div> -->
        </div>
    </div>
    </div>
</section>

</main>

<?php get_footer(); ?>