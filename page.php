<?php get_header(); ?>

<div class="container wrap">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('includes/header-image'); ?>

  <?php the_content(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
