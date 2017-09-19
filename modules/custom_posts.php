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
      'has_archive' => false,
			'menu_icon' => 'dashicons-admin-multisite',
      'rewrite' => array('slug' => 'projects'),
      'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );

  // register_post_type( 'civic_client',
  //   array(
  //     'labels' => array(
  //       'name' => __( 'Clients' ),
  //       'singular_name' => __( 'Client' ),
  //       'all_items' => __( 'All Clients' ),
  //       'view_item' => __( 'View Client' ),
  //       'add_new_item' => __( 'Add New Client' ),
  //       'edit_item' => __( 'Edit Client' ),
  //       'update_item' => __( 'Update Client' )
  //     ),
  //     'public' => true,
  //     'has_archive' => true,
	// 		'menu_icon' => 'dashicons-admin-users',
	// 		'supports' => array( 'title', 'thumbnail' )
  //   )
  // );
}

add_action( 'init', 'create_custom_posts' );

?>
