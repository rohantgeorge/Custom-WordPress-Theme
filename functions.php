<?php
/**
 * Theme Functions
 * 
 * @package RTR
 */

function RTR_enqueue_scripts() {
    // Register Stylesheets
    wp_register_style( 'style', get_stylesheet_uri(  ), [], filemtime( get_template_directory(  ) . '/style.css' ), 'all' );
    wp_register_style( 'bootstrap', get_template_directory_uri(  ) . '/assets/css/plugins/bootstrap.min.css', [], false, 'all' );
    
    // Register Scripts
    wp_register_script( 'main', get_template_directory_uri(  ) . '/assets/js/main.js', [ 'jquery' ], filemtime( get_template_directory(  ) . '/assets/js/main.js' ), true );
    
    // Enqueue Stylesheets
    wp_enqueue_style( 'style' );
    wp_enqueue_style( 'bootstrap' );
    
    // Enqueue Scripts
    wp_enqueue_script( 'main' );

}
add_action( 'wp_enqueue_scripts', 'RTR_enqueue_scripts' );