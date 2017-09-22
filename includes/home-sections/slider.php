<div class="carousel">
  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-caption">
        <h1>Our Building Success Starts&nbsp;with You.</h1>
      </div>
      <?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
      <?php if( $attachments->exist() ) : ?>
        <?php $count = 0; ?>
        <?php while( $attachments->get() ) : ?>
          <div class="item <?php if ($count == 0) echo 'active' ?>">
            <img src="<?php echo $attachments->url(); ?>" alt="<?php echo $attachments->field( 'title' ); ?>">
          </div>
          <?php $count++; ?>
        <?php endwhile; ?>
      <?php endif; ?>

      <!-- <div class="item active">
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
      </div> -->
    </div>
  </div>
</div>
