<?php 
// Register Style
function all_styles() {

	wp_register_style( 'style', get_template_directory_uri() . '/style.css', false, false );
	wp_enqueue_style( 'style' );

}
add_action( 'wp_enqueue_scripts', 'all_styles' );

// Register Script
function all_scripts() {

	wp_register_script( 'jquery_3', get_template_directory_uri() . '/assets/libs/jquery/jquery-3.4.1.min.js', false, false, true );
	wp_enqueue_script( 'jquery_3' );

}
add_action( 'wp_enqueue_scripts', 'all_scripts' );
?>