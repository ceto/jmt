<header class="banner" role="banner">
  <div class="banner__inner wrapper wrapper--wide">
    
    <nav class="navigation navigation--main" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav--main']);
      endif;
      ?>
    </nav>
    
    <div class="thebrand">
      <a class="thebrand__logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <span class="thebrand__sitename"><?php bloginfo('name'); ?></span>
      <span class="thebrand__sitedescr"><?php bloginfo('description'); ?></span>
      
    </div>

    <?php do_action('icl_language_selector');  ?>
  </div>
</header>
