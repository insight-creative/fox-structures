<?php get_header(); ?>

<div class="container wrap">

  <?php
    $the_category_ID = $wp_query->get_queried_object_id();
    $featured_image_URL = fifc_get_tax_thumbnail( $the_category_ID, 'category', 'full' );
  ?>
  
  <div class="row">
    <div class="col-md-12">
      <div class="featured-image">
        <img src="<?php echo $featured_image_URL ?>">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-7">

      <div class="post">

        <h1><?php single_cat_title(); ?></h1>

        <?php
          // Show an optional term description.
          $term_description = term_description();
          if ( ! empty( $term_description ) ) :
            printf( '<div class="taxonomy-description">%s</div>', $term_description );
          endif;
        ?>

      </div>

    </div>
    <div class="col-md-5 thumbnail-column">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('includes/thumbnail'); ?>
      <?php endwhile; endif; ?>
    </div>
  </div>




<!-- <?php if ( have_posts() ) : ?>

  <?php get_template_part('includes/header-image'); ?>

  <?php the_content(); ?>

<?php else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?> -->

<?php get_footer(); ?>
