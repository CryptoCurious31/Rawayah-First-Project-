<?php
get_header();
/* Template Name: All Product Template */
?>
<section class="all-products">
    <div class="container-fluid allproduct-page">
        <div class="row">

            <?php
            $args = array(
                'post_type' => 'product ', // Custom post type key
                'posts_per_page' => -1, // -1 to retrieve all posts, you can adjust this number
            );

            $products_query = new WP_Query($args);

            if ($products_query->have_posts()):
                while ($products_query->have_posts()):
                    $products_query->the_post();
                    // Inside the loop, you can render each product post as needed
                    $product_info = get_field('products_info');
                    ?>
                    <div class="col-lg-3 product-container">
                        <div class="Product-items">
                            <div class="image-container">
                                <a href="<?php echo the_permalink(); ?>" >
                                    <img src="<?php echo $product_info['image']['url']; ?>" alt="">
                                </a>
                                    <div class="overlay">
                                        <a href="#"><button class="button left-button">Quick look</button></a>
                                        <a href="#"><button class="button right-button">Quick shop</button></a>
                                    </div>
                                </a>
                                <i class="fas fa-heart icon"></i>
                            </div>
                            <div class="product-title">
                                <h4><?php the_title(); ?></h4>
                                <p>$<?php echo $product_info['actual_price']; ?><strike>$<?php echo $product_info['Price']; ?></strike></p>
                                <div class="rating">
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
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
</section>
<?php
get_footer();
?>