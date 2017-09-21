<?php get_header(); ?>

<div class="container wrap">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="carousel">
    <div id="carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-caption">
          <h1>Our Building Success Starts&nbsp;with You.</h1>
        </div>
        <div class="item active">
          <img src="{{ site.baseurl }}/img/milksource.jpg" alt="Milksource">
        </div>
        <div class="item">
          <img src="{{ site.baseurl }}/img/greenville-market.jpg" alt="Greenville Market">
        </div>
        <div class="item">
          <img src="{{ site.baseurl }}/img/oaks-clubhouse.jpg" alt="Oaks Clubhouse">
        </div>
        <div class="item">
          <img src="{{ site.baseurl }}/img/cleanwater-center.jpg" alt="Clean Water Center">
        </div>
        <div class="item">
          <img src="{{ site.baseurl }}/img/badgerland-storage.jpg" alt="Badgerland Storage">
        </div>
      </div>
    </div>
  </div><!-- /carousel -->

  <div class="row">
    <nav class="sub-nav">
      <ul class="nav nav-pills nav-justified">
        <li>
          <a href="{{ site.baseurl }}/agricultural" role="button"><span class="icon icon-farm"></span><br>Agricultural</a>
        </li>
        <li>
          <a href="{{ site.baseurl }}/commercial" role="button"><span class="icon icon-commercial"></span><br>Commercial</a>
        </li>
        <li>
          <a href="{{ site.baseurl }}/equestrian" role="button"><span class="icon icon-horse"></span><br>Equestrian</a>
        </li>
        <li>
          <a href="{{ site.baseurl }}/residential" role="button"><span class="icon icon-residential"></span><br>Residential</a>
        </li>
        <li>
          <a href="{{ site.baseurl }}/storage" role="button"><span class="icon icon-storage"></span><br>Storage</a>
        </li>
      </ul>
    </nav>
  </div>

  <div class="feature">
    <div class="row">
      <div class="col-md-9 center-block">
        <div class="lead"><?php the_content(); ?></div>
      </div>
    </div>
    <div class="row">
      <div class="feature-footer">
        <div class="col-md-12">
          <a href="https://www.facebook.com/pages/Fox-Structures-Inc/307183589400968"><i class="fa fa-facebook-square"></i> Facebook</a>
          <a href="https://www.youtube.com/channel/UCC4K4vxLwVlXVLBDQObyM6A"><i class="fa fa-youtube-square"></i> YouTube</a>
          <a href="http://www.linkedin.com/company/fox-structures-inc-"><i class="fa fa-linkedin-square"></i> LinkedIn</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

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

  <hr>

  <!--
  <div class="row">
    <div class="col-md-12">
      <h2>Testimonials</h2>
    </div>
    {% for post in site.categories.testimonials %}
      <div class="col-md-6">
        {{ post.content }}
      </div>
    {% endfor %}
    </ul>
  </div>

  <hr> -->

  <div class="row">
    <div class="col-md-12">
      <h2>Contact Us</h2>
    </div>
    <div class="col-md-4">
      <p>Phone: 800-236-1369</p>
      <p>Local: 920-766-9305</p>
      <p>2201 Eastline Road<br>
      Kaukauna, WI 54130</p>
      <p><a href="https://www.facebook.com/pages/Fox-Structures-Inc/307183589400968"><i class="fa fa-facebook-square"></i> Facebook</a></p>
      <p><a href="https://www.youtube.com/channel/UCC4K4vxLwVlXVLBDQObyM6A"><i class="fa fa-youtube-square"></i> YouTube</a></p>
      <p><a href="http://www.linkedin.com/company/fox-structures-inc-"><i class="fa fa-linkedin-square"></i> LinkedIn</a></p>
    </div>
    <div class="col-md-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2855.3972640178113!2d-88.254993!3d44.301783!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8803aeafeea6c15d%3A0x14c92b8c9918bf5!2sFox+Structures+Inc!5e0!3m2!1sen!2sus!4v1400528285752" width="100%" height="300" frameborder="0" style="border:0"></iframe>
    </div>
  </div>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, this page does not exist.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
