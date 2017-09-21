<?php get_header(); ?>

<div class="container wrap">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('includes/header-image'); ?>

  <div class="row">
    <div class="col-md-8 center-block">
      <?php the_content(); ?>
      <?php
    		query_posts( array(
          'post_type' => 'fs_job_listing',
          'order' => 'ASC',
          'orderby' => 'date'
        ) );
    		if ( have_posts() ) : while ( have_posts() ) : the_post();
    	?>
        <hr>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
    	<?php endwhile; endif; wp_reset_query(); ?>
    </div>
  </div>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
