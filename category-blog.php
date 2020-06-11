<!-- Header -->
<?php get_header(); ?>

<section class="container my-2 mx-2 mt-4 mb-4">
  <div class="row">

    <!-- <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3  mb-4">
    <div id="blog-sidebar" class="widget card px-3 py-3">
    <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
  <?php else : ?>
<?php endif; ?>
</div>
</div> -->

<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4">
  <?php get_template_part('includes/section','archive'); ?>

  <?php previous_posts_link();  ?>
  <?php next_posts_link();  ?>

</div>

</div>
</section>
<!-- Footer -->
<?php get_footer(); ?>
