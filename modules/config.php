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

?>
