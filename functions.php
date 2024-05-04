<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/Css/homepage.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'Font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'BootStrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
