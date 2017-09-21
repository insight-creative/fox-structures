<?php get_header(); ?>

<div class="container wrap">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('includes/header-image'); ?>

  <div class="row">
    <div class="col-md-8 center-block">
      <?php the_content(); ?>
    </div>
  </div>

  <div class="row thumbnail-grid">
    <?php
  		query_posts( array( 'post_type' => 'fs_project' ) );
  		if ( have_posts() ) : while ( have_posts() ) : the_post();
  	?>
      <?php get_template_part('includes/thumbnail'); ?>
  	<?php endwhile; endif; wp_reset_query(); ?>
  </div>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
