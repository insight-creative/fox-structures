<?php

  add_theme_support('post-thumbnails');

  // Show custom post types (projects) in category pages
  function custom_post_type_cat_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
      if ($query->is_category()) {
        $query->set( 'post_type', array( 'post', 'fs_project' ) );
      }
    }
  }
  add_action('pre_get_posts','custom_post_type_cat_filter');

  // Removes from admin menu
  add_action( 'admin_menu', 'my_remove_admin_menus' );
  function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'edit.php' );
  }

  // Removes from post and pages
  add_action('init', 'remove_comment_support', 100);
  function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
  }

  // Removes from admin bar
  function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('customize');
    $wp_admin_bar->remove_node('new-post');
  }
  add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

?>
