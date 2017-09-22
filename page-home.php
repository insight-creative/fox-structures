<?php get_header(); ?>

<div class="container wrap">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('includes/home-sections/slider'); ?>
  <?php get_template_part('includes/home-sections/categories'); ?>
  <?php get_template_part('includes/home-sections/main-content'); ?>
  <hr>
  <?php get_template_part('includes/home-sections/projects'); ?>
  <hr>
  <?php get_template_part('includes/home-sections/contact'); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
