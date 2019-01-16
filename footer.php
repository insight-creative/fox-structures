<hr>
<footer>
  <nav>
    <div class="row">
      <div class="col-md-12">
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'main-menu',
              'container' => FALSE,
              'container_id' => FALSE,
              'depth' => 1,
              'menu_class' => 'list-inline'
            )
          );
        ?>
        <p class="copyright">&copy; <?php bloginfo('name'); ?>, Inc. <?php echo date("Y"); ?> | Phone: <a href="tel:<?php echo get_option('phone_1'); ?>"><?php echo get_option('phone_1'); ?></a> | Local: <a href="tel:<?php echo get_option('phone_2'); ?>"><?php echo get_option('phone_2'); ?></a></p>
      </div>
    </div>
  </nav>

</footer>

</div>

<?php wp_footer(); ?>


</body>
</html>
