<?php

$font_url = null;

function theme_styles() {


  if ($font_url) {
    wp_enqueue_style( 'fonts', $font_url);
  }

  // TODO: load font-awesome
  // TODO: load icomoon

  // wp_enqueue_style( 'bootstrap', get_stylesheet_);
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
