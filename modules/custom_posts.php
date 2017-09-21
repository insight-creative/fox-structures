<?php

function create_custom_posts() {
  register_post_type( 'fs_project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' ),
        'all_items' => __( 'All Projects' ),
        'view_item' => __( 'View Project' ),
        'add_new_item' => __( 'Add New Project' ),
        'edit_item' => __( 'Edit Project' ),
        'update_item' => __( 'Update Project' )
      ),
      'public' => true,
      'has_archive' => true,
			'menu_icon' => 'dashicons-admin-multisite',
      'rewrite' => array('slug' => 'projects'),
      'taxonomies' => array( 'category' ),
      'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );

  register_post_type( 'fs_job_listing',
    array(
      'labels' => array(
        'name' => __( 'Careers' ),
        'singular_name' => __( 'Job Listing' ),
        'all_items' => __( 'All Job Listings' ),
        'view_item' => __( 'View Job Listing' ),
        'add_new_item' => __( 'Add New Job Listing' ),
        'edit_item' => __( 'Edit Job Listing' ),
        'update_item' => __( 'Update Job Listing' )
      ),
      'public' => true,
      'has_archive' => false,
			'menu_icon' => 'dashicons-hammer',
      'rewrite' => array('slug' => 'careers'),
      'supports' => array( 'title', 'editor' )
    )
  );
}

add_action( 'init', 'create_custom_posts' );

?>
