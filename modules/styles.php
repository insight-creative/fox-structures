<?php

function theme_styles() {
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/styles/bootstrap.min.css');
  wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/styles/font-awesome.min.css');
  wp_enqueue_style( 'icomoon', get_stylesheet_directory_uri() . '/styles/icomoon-icons.css');
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
