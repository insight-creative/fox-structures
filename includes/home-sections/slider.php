<div class="carousel">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-caption">
        <h1><?php bloginfo('description'); ?></h1>
      </div>
      <?php $attachments = new Attachments( 'attachments' ); ?>
      <?php if( $attachments->exist() ) : ?>
        <?php $count = 0; ?>
        <?php while( $attachments->get() ) : ?>
          <div class="item <?php if ($count == 0) echo 'active' ?>">
            <img src="<?php echo $attachments->url(); ?>" alt="<?php echo $attachments->field( 'title' ); ?>">
          </div>
          <?php $count++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
