<?php get_header(); ?>

        <!-- ======== image carousel code start =========== -->
        <section class="carousel">
            <div class="container-fluid px-0 ">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="text">
                    <div class="textAndHeadings">
                        <p class="subtext2">Eid Delivery Deadlines</p>
                        <h3 class="mainHeading">
                            4th April Out Of City | 7th April Karachi
                        </h3>
                        <p class="slogan">Book your order ASAP!</p>
                        <div class="button">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                    </div>
                </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="image">
                    <img src="./Props/BHH-1086-Maroon-22.webp" alt="Top Arrival" srcset="">
                </div>
                    </div>
                </div>
                
                
            </div>
        </section>

        <!-- ======== All Product Section -->
        <section class="allProduct">
            <div class="container">
                <div class="row categories">
                    <div class="col">
                        <div class="category">
                            <a class="imageTwo forDisplay" href="#"><img  src="<?php echo get_template_directory_uri() . '/Props/Hocks/Sleepers.jpg'  ?> "
                                alt="CourtShoes" srcset=""></a>
                        <h3><a href="#">CourtShoes</a></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="category">
                            <a class="imageTwo forDisplay" href="#"><img  src="<?php echo get_template_directory_uri() . '/Props/Hocks/Sleepers.jpg'  ?> "
                                alt="CourtShoes" srcset=""></a>
                        <h3><a href="#">CourtShoes</a></h3>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="category">
                            <a class="imageTwo forDisplay" href="#"><img  src="<?php echo get_template_directory_uri() . '/Props/Hocks/Sleepers.jpg'  ?> "
                                alt="CourtShoes" srcset=""></a>
                        <h3><a href="#">CourtShoes</a></h3>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="category">
                            <a class="imageTwo forDisplay" href="#"><img  src="<?php echo get_template_directory_uri() . '/Props/Hocks/Sleepers.jpg'  ?> "
                                alt="CourtShoes" srcset=""></a>
                        <h3><a href="#">CourtShoes</a></h3>
                        </div>
                        
                    </div>
                    <div class="col">
                        <div class="category">
                            <a class="imageTwo forDisplay" href="#"><img  src="<?php echo get_template_directory_uri() . '/Props/Hocks/Sleepers.jpg'  ?> "
                                alt="CourtShoes" srcset=""></a>
                        <h3><a href="#">CourtShoes</a></h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- ================ Premium Designs Section ============== -->
        <section class="staticPicture">
            <h1 class="premium">Premium Designs</h1>
            <img class="pic" src="./Props/Black Beiger/2_f34a9104-6a46-414c-a148-06bc7a21b0fd_1000x.jpg" />
        </section>

        <section class='product-slider '>
            <div class="container">
                <div class="row product-slider1">
                <?php
$args = array(
    'post_type' => 'product', // Custom post type key
    'posts_per_page' => -1, // -1 to retrieve all posts, you can adjust this number
);

$products_query = new WP_Query( $args );

if ( $products_query->have_posts() ) :
    while ( $products_query->have_posts() ) : $products_query->the_post();
        // Inside the loop, you can render each product post as needed
        $product_info = get_field('products_info');
?>
        <div class="product-slide">
            <div class="product-item">
                <div class="product-img">
                <a href="<?php the_permalink(); ?>" class="product-link"> <!-- Add the permalink -->
                    
                    <img src="<?php echo $product_info['image']['url'];?>" alt="">
                    <img src="<?php echo $product_info['hover_image']['url'];?>" alt="">
                    </a>
                </div>
                <div class="product-title">
                    <h4><?php the_title(); ?></h4>
                    <p>$<?php echo $product_info['actual_price'];?>  <strike>$<?php echo $product_info['Price'];?></strike></p> 
                </div>
                <div class="sizing">
                    <div class="size">Q</div>
                    <div class="size">W</div>
                    <div class="size">E</div>
                    <div class="size">R</div>
                    <div class="size">T</div>
                    <div class="size">Y</div>
                    <div class="size">U</div>
                    <div class="size">I</div>
                    <div class="size">T</div>
                    <div class="size">Y</div>
                    <div class="size">U</div>
                    <div class="size">I</div>
                </div>
            </div>
        </div>
<?php
    endwhile;
    wp_reset_postdata(); // Reset post data
else :
    // If no products are found
    echo 'No products found.';
endif;
?>

                    <!-- <div class="product-slide">
                        <div class="product-item">
                                <div class="product-img">
                                    <img src="<?php echo get_template_directory_uri() . "/Props/Black Beiger/01241103_600x.jpg"?>"   alt="Image 1">
                                    <img src="<?php echo get_template_directory_uri() . "/Props/Black Beiger/01262750_600x.jpg"?>"   alt="Image 2">
                                </div>
                                <div class="product-title">
                                    <h4>Leather Slides Sandals</h4>
                                    <p>$450 <strike>$500</strike></p>
                                </div>
                                <div class="sizing">
                                        <div class="size">Q</div>
                                        <div class="size">W</div>
                                        <div class="size">E</div>
                                        <div class="size">R</div>
                                        <div class="size">T</div>
                                        <div class="size">Y</div>
                                        <div class="size">U</div>
                                        <div class="size">I</div>
                                        <div class="size">T</div>
                                        <div class="size">Y</div>
                                        <div class="size">U</div>
                                        <div class="size">I</div>
                                    </div>
                            </div>
                    </div>
                    <div class="product-slide">
                        <div class="product-item">
                            <div class="product-img">
                                <img src="<?php echo get_template_directory_uri() . "/Props/Black Beiger/01241103_600x.jpg"?>"   alt="Image 1">
                                <img src="<?php echo get_template_directory_uri() . "/Props/Black Beiger/01241110_600x.jpg"?>"   alt="Image 2">
                            </div>
                            <div class="product-title">
                                <h4>Leather Slides Sandals</h4>
                                <p>$450 <strike>$500</strike></p>
                            </div>
                            <div class="sizing">
                                        <div class="size">Q</div>
                                        <div class="size">W</div>
                                        <div class="size">E</div>
                                        <div class="size">R</div>
                                        <div class="size">T</div>
                                        <div class="size">Y</div>
                                        <div class="size">U</div>
                                        <div class="size">I</div>
                                        <div class="size">T</div>
                                        <div class="size">Y</div>
                                        <div class="size">U</div>
                                        <div class="size">I</div>
                                    </div>
                        </div>
                    </div>
                    <div class="product-slide">
                        <div class="product-item">
                            <div class="product-img">
                                <img src="<?php echo get_template_directory_uri() . "/Props/Black Beiger/01241103_600x.jpg"?>"   alt="Image 1">
                                <img src="<?php echo get_template_directory_uri() . "/Props/Black Beiger/01241110_600x.jpg"?>"   alt="Image 2">
                            </div>
                            <div class="product-title">
                                <h4>Leather Slides Sandals</h4>
                                <p>$450 <strike>$500</strike></p>
                            </div>
                            <div class="sizing">
                                        <div class="size">Q</div>
                                        <div class="size">W</div>
                                        <div class="size">E</div>
                                        <div class="size">R</div>
                                        <div class="size">T</div>
                                        <div class="size">Y</div>
                                        <div class="size">U</div>
                                        <div class="size">I</div>
                                        <div class="size">T</div>
                                        <div class="size">Y</div>
                                        <div class="size">U</div>
                                        <div class="size">I</div>
                                    </div>
                        </div>
                    </div>
                    <div class="product-slide">
                        <div class="product-item">
                            <div class="product-img">
                                <img src="<?php echo get_template_directory_uri() . "/Props/Black Beiger/01241103_600x.jpg"?>"   alt="Image 1">
                                <img src="<?php echo get_template_directory_uri() . "/Props/Black Beiger/01241110_600x.jpg"?>"   alt="Image 2">
                            </div>
                            <div class="product-title">
                                <h4>Leather Slides Sandals</h4>
                                <p>$450 <strike>$500</strike></p>
                            </div>
                            <div class="sizing">
                                        <div class="size">Q</div>
                                        <div class="size">W</div>
                                        <div class="size">E</div>
                                        <div class="size">R</div>
                                        <div class="size">T</div>
                                        <div class="size">Y</div>
                                        <div class="size">U</div>
                                        <div class="size">I</div>
                                        <div class="size">T</div>
                                        <div class="size">Y</div>
                                        <div class="size">U</div>
                                        <div class="size">I</div>
                                    </div>
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </section>

        <!-- ========= Testomonial Section ======== -->
        <section class="testomonial">
            <div class="testomonial-container">
                <div class="client-testomonial">
                    <p class="review">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam suscipit nostrum perspiciatis
                        voluptatum optio quis animi nulla consectetur rerum laboriosam, dolor magnam ipsa.
                    </p>
                    <div class="icons">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </section>
    
    </main>

<?php get_footer(); ?>