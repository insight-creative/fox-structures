<?php

function theme_scripts() {
  wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'), null, true);
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/scripts/main.js', array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

?>
