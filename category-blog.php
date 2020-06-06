<!-- Header -->
<?php get_header(); ?>

<div class="container">
<div class="row">

  <div class="col">
    <div id="sidebar-secondary" class="sidebar">
        <?php if ( is_active_sidebar( 'secondary' ) ) : ?>
            <?php dynamic_sidebar( 'secondary' ); ?>
        <?php else : ?>

        <?php endif; ?>

        <!-- search form -->
          <?php get_search_form(); ?>

    </div>
  </div>

  <div class="col">
      <?php get_template_part('includes/section','archive'); ?>

   <?php previous_posts_link();  ?>
   <?php next_posts_link();  ?>
 </div>

</div>
</div>
<!-- Footer -->
<?php get_footer(); ?>
