<?php wp_footer(); ?>

<div class="container-fluid bg-dark">
  <div class="row">
    <div class="col">
        <h1>Footer</h1>
      <nav id="firstexample-footer-menu">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'footer-menu'
          ));
        ?>
      </nav>
    </div>
  </div>
</div>
</body>
</html>