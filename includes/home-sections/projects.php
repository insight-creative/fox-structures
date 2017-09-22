<div class="feature">
  <div class="row">
    <div class="col-md-12">
      <h2>Featured Projects</h2>
    </div>
  </div>
  <div class="row thumbnail-grid">
    <?php
      $catId = get_cat_ID('Featured');
      $args = array(
        'category' => $catId,
        'post_type' => 'fs_project'
      );
      $posts_array = get_posts( $args );
      foreach ( $posts_array as $post ) {
        setup_postdata( $post );
        get_template_part('includes/thumbnail');
      }
      wp_reset_postdata();
    ?>
  </div>
  <div class="row">
    <div class="feature-footer">
      <div class="col-md-12">
        <a class="btn btn-primary" href="/portfolio" role="button">View all projects</a>
      </div>
    </div>
  </div>
</div>
