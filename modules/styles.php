<?php

$font_url = null;
$tachyons = false;

function theme_styles() {
  
  if ($tachyons) {
    wp_enqueue_style( 'tachyons', 'https://unpkg.com/tachyons@4.7.0/css/tachyons.min.css');
  }

  if ($font_url) {
    wp_enqueue_style( 'fonts', $font_url);
  }

	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
