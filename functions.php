<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'BootStrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/Css/homepage.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'Font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'Slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), '1.0.0', 'all' );
    // Scripts
    wp_enqueue_script( 'jquery1','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js' , array(), '1.0', true );
    wp_enqueue_script( 'slick','https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' , array(), '1.0', true );
    wp_enqueue_script( 'bootstrap-js',"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" , array(), '1.0', true );
    wp_enqueue_script( 'fancybox','https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js' , array(), '1.0', true );
    wp_enqueue_script( 'script',get_template_directory_uri() . '/js/scripts.js' , array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


// Registering multiple menus
function theme_register_menus() {
    register_nav_menus( array(
        'header_menu' => esc_html__( 'Header Menu', 'header_menu' ),
        'footer_menu' => esc_html__( 'Footer Menu', 'footer_menu' ),
    ) );
}
add_action( 'after_setup_theme', 'theme_register_menus' );

// Register custom post type using ACF
function custom_post_type_registration() {
    $args = array(
        'public' => true,
        'label'  => 'Products',
        'supports' => array( 'title', 'editor', 'thumbnail' ), // Add 'thumbnail' for featured image support
        // Add more arguments as needed
    );
    register_post_type( 'product', $args );
}
add_action( 'init', 'custom_post_type_registration' );




?>

