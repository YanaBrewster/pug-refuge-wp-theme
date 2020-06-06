<!-- Header -->
<?php get_header(); ?>

<div class="row">

  <div id="sidebar-primary" class="col sidebar">
      <?php if ( is_active_sidebar( 'primary' ) ) : ?>
          <?php dynamic_sidebar( 'primary' ); ?>
      <?php else : ?>
      <?php endif; ?>
  </div>

  <div class="col">
      <?php get_template_part('includes/section','residents'); ?>
   <?php previous_posts_link();  ?>
   <?php next_posts_link();  ?>
 </div>

</div>

<!-- Footer -->
<?php get_footer(); ?>
