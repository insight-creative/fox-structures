<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<div class="row">
  <div class="col-md-12">
    <div class="featured-image">
      <img src="<?php echo $image[0]; ?>">
    </div>
  </div>
</div>
<?php endif; ?>
