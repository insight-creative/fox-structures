<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
<div class="thumbnail">
  <a href="<?php the_permalink() ?>"><img src="<?php echo $image[0]; ?>"></a>
  <div class="caption">
    <a class="caption-link" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  </div>
</div>
