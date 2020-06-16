<!-- Header -->
<?php get_header(); ?>

<div class="container my-4 mx-4">
  <div class="row">

    <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3 mb-4">
      <div id="blog-sidebar" class="widget card px-3 py-3">
        <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
      <div id="page-sidebar" class="widget card px-3 py-3">
        <?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'page-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4">
      <h3 class="mt-4"> Search Results </h3>
      <?php if ( have_posts() ) { ?>
        <h2> <?php echo single_cat_title(); ?> </h2>
        <?php get_template_part('includes/section','archive'); ?>

        <?php previous_posts_link();  ?>
        <?php next_posts_link();  ?>
      </div>
    <?php } else { ?>
      <p> Sorry, no posts matched your search term. </p>
    <?php } ?>
  </div>
</div>
</div>
<!-- Footer -->
<?php get_footer(); ?>
