<header class="banner" role="banner">
  <div id="banner__inner" class="banner__inner wrapper wrapper--wide">
    

    <div class="thebrand">
      <a class="thebrand__logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <span class="thebrand__sitename"><?php bloginfo('name'); ?></span>
      <span class="thebrand__sitedescr"><?php bloginfo('description'); ?></span>
    </div>

    <nav class="navigation navigation--main" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav--main']);
      endif;
      ?>
    </nav>
    
    <?php do_action('wpml_add_language_selector'); ?>

  </div>
</header>
