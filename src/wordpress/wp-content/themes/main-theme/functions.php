<?php
function theme_enqueue_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri());
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
    wp_enqueue_script( 'my-theme-script', get_template_directory_uri() . '/script.js', array(), null, true );
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>

