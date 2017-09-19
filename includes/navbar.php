<header>
  <div class="navbar-wrapper">
    <div class="container">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="<?php get_image_uri('logo.jpg'); ?>"></a>
        </div>
        <?php
          wp_nav_menu( array(
            'menu'              => 'main-menu',
            'theme_location'    => 'main-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav navbar-right',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
          );
        ?>
      </nav>
    </div>
  </div>
</header>
