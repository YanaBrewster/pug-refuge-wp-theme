<footer class="myTheme">

  <div>
    <?php
    wp_nav_menu(
      array(
      'theme_location' => 'footer-menu',
      'menu_class' => 'top-bar'
      )
    );
    ?>
  </div>

<h5 class="text-center"><?php echo get_theme_mod('charityShopTheme_footerMessage'); ?></h5>

<?php wp_footer(); ?>

</footer>
</body>
</html>
