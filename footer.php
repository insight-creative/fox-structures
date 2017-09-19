  <!-- TODO: convert to wordpress menu  -->
  <hr>
  <footer>
    <nav>
      <div class="row">
        <div class="col-md-12">
          <a href="{{ site.baseurl }}/agricultural">Agricultural</a></li>
          <a href="{{ site.baseurl }}/commercial">Commercial</a></li>
          <a href="{{ site.baseurl }}/equestrian">Equestrian</a></li>
          <a href="{{ site.baseurl }}/residential">Residential</a></li>
          <a href="{{ site.baseurl }}/storage">Storage</a></li> |
          <a href="{{ site.baseurl }}/about-us">About Us</a></li>
          <a href="{{ site.baseurl }}/services">Services</a></li>
          <a href="{{ site.baseurl }}/portfolio">Portfolio</a></li>
          <a href="{{ site.baseurl }}/careers">Careers</a></li>
          <a href="{{ site.baseurl }}/contact">Contact</a></li>
          <!-- TODO: Get from site settings -->
          <p class="copyright">&copy; Fox Structures, Inc. 2014 | Phone: 800-236-1369 | Local: 920-766-9305</p>
        </div>
      </div>
    </nav>

  </footer>

  <!-- TODO: Clean up these divs -->
  </div>
  </div>


  <?php wp_footer(); ?>

  <!-- TODO: Load from scripts -->
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
