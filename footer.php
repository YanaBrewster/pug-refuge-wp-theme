<footer class="myTheme pt-3">

<div class="row">

  <div class="col-12">
    <!-- Footer nav -->
    <div class="text-center">
      <?php
      wp_nav_menu(
        array(
        'theme_location' => 'footer-menu',
        'menu_class' => 'top-bar',
        'container'  => 'div',
        'container_id'  => 'footerMenu'
        )
      );
      ?>
    </div>
  </div>

  <div class="col-12">
    <div class="text-center">
          <?php my_social_media_icons() ?>
    </div>
  </div>

  <div class="col-12">
    <p class="text-center"><b><?php echo get_theme_mod('charityShopTheme_footerMessage'); ?> | Created by Yana Brewster | <a href="https://www.yanabrewster.com/">www.yanabrewster.com</b></p>
  </div>

</div>



<?php wp_footer(); ?>

</footer>
</body>
</html>
