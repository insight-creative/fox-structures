  <hr>
  <footer>
    <nav>
      <div class="row">
        <div class="col-md-12">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'footer-menu',
                'container' => FALSE,
                'container_id' => FALSE,
                'depth' => 1,
                'menu_class' => 'list-inline'
              )
            );
          ?>
          <p class="copyright">&copy; <?php bloginfo('name'); ?>, Inc. <?php echo date("Y"); ?> | Phone: 800-236-1369 | Local: 920-766-9305</p>
        </div>
      </div>
    </nav>

  </footer>

  </div>

  <?php wp_footer(); ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="{{ site.baseurl }}/js/bootstrap.min.js"></script>

  <!-- Widon't, removes widows in text -->
  <script>
  jQuery(function($) {
    $('h1,h2,h3,li,p').each(function() {
        $(this).html($(this).html().replace(/\s([^\s<]+)\s*$/,'&nbsp;$1'));
    });
  });
  </script>


  </body>
</html>
