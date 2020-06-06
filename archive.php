<!-- Header -->
<?php get_header(); ?>

<div class="container">

  <div class="row">

    <div id="sidebar-secondary" class="sidebar">
        <?php if ( is_active_sidebar( 'secondary' ) ) : ?>
            <?php dynamic_sidebar( 'secondary' ); ?>
        <?php else : ?>
        <?php endif; ?>
    </div>

    <div class="col">

      <h12 class="myHeadings"> <?php echo single_cat_title(); ?> </h2>
      <?php get_template_part('includes/section','archive'); ?>

   <?php previous_posts_link();  ?>
   <?php next_posts_link();  ?>

   </div>

 </div>

</div>
<!-- Footer -->
<?php get_footer(); ?>
