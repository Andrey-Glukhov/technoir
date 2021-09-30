<nav id="tech-navigation" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <!-- data-bs-toggle="collapse" -->
  <button class="navbar-toggler" type="button" id="navbarSideCollapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'navbar ml-auto',
        'items_wrap' => '<li id="%1$s" data-scroll class="navbar-item %2$s">%3$s</li>',
        'item_spacing' => 'preserve'
      )
    );
    ?>
  </ul>
    </div>
  </div>
</nav>