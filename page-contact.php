<?php get_header(); ?>

<div class="container wrap">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php get_template_part('includes/header-image'); ?>

  <div class="row">
    <div class="col-md-8 center-block">
      <h1><?php the_title(); ?></h1>
      <img src="http://www.foxstructures.com/wp-content/uploads/2018/12/Fox_GuyGroupMedium.jpg">
      <?php get_template_part('includes/phone-block'); ?>
      <?php get_template_part('includes/map'); ?>
      <?php get_template_part('includes/address-block'); ?>
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
