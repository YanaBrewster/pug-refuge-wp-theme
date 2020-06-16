<!-- Header -->
<?php get_header(); ?>

<section class="container my-2 mx-2 mt-4 mb-4 mx-auto">

  <div class="row">

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 mb-4">
      <div id="blog-sidebar" class="widget card px-3 py-2">
        <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
      <div id="page-sidebar" class="widget card px-3 py-2">
        <?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'page-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
      <h2 class="myHeadings"> <?php echo single_cat_title(); ?> </h2>

      <?php get_template_part('includes/section','archive'); ?>

      <?php previous_posts_link();  ?>
      <?php next_posts_link();  ?>
    </div>

  </div>

</section>
<!-- Footer -->
<?php get_footer(); ?>
