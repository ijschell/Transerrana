<?php 
add_theme_support( 'post-thumbnails' );
include('meta_box.php');
// Register Style
function all_styles() {

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap/css/bootstrap-grid.min.css', false, false );
	wp_enqueue_style( 'bootstrap' );

	wp_register_style( 'slick', get_template_directory_uri() . '/assets/libs/slick/slick.css', false, false );
	wp_enqueue_style( 'slick' );

	wp_register_style( 'dashicons', get_template_directory_uri() . '/assets/libs/dashicons/dashicons.min.css', false, false );
	wp_enqueue_style( 'dashicons' );

	wp_register_style( 'fancybox', get_template_directory_uri() . '/assets/libs/fancybox/jquery.fancybox.min.css', false, false );
	wp_enqueue_style( 'fancybox' );

	wp_register_style( 'aos', get_template_directory_uri() . '/assets/libs/aos/aos.css', false, false );
	wp_enqueue_style( 'aos' );

	wp_register_style( 'style', get_template_directory_uri() . '/style.css', false, false );
	wp_enqueue_style( 'style' );

}
add_action( 'wp_enqueue_scripts', 'all_styles' );

// Register Script
function all_scripts() {

	wp_register_script( 'jquery_3', get_template_directory_uri() . '/assets/libs/jquery/jquery-3.4.1.min.js', false, false, true );
	wp_enqueue_script( 'jquery_3' );

	wp_register_script( 'slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', array('jquery_3'), false, true );
	wp_enqueue_script( 'slick' );

	wp_register_script( 'fancybox', get_template_directory_uri() . '/assets/libs/fancybox/jquery.fancybox.min.js', array('jquery_3'), false, true );
	wp_enqueue_script( 'fancybox' );

	wp_register_script( 'parallax', get_template_directory_uri() . '/assets/libs/parallax/parallax.min.js', array('jquery_3'), false, true );
	wp_enqueue_script( 'parallax' );

	wp_register_script( 'aos', get_template_directory_uri() . '/assets/libs/aos/aos.js', array('jquery_3'), false, true );
	wp_enqueue_script( 'aos' );

	wp_register_script( 'scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery_3'), false, true );
	wp_enqueue_script( 'scripts' );

}
add_action( 'wp_enqueue_scripts', 'all_scripts' );
?>