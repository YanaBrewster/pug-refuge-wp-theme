<?php get_header(); ?>

<section class="container my-2 mx-2 mt-4 mb-4 mx-auto">

  <div class="row">

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
      <div id="page-sidebar" class="widget card px-3 py-2">
        <?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'page-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-9 mb-4">
      <div class="px-2 py-2">
        <?php if(has_post_thumbnail()): ?>
        <?php endif; ?>
      <h2 class="myHeadings mt-3"> <?php the_title(); ?>  </h2>
        <?php get_template_part('includes/section','residents'); ?>
        <?php wp_link_pages(); ?>
      </div>
    </div>

  </div>

</section>

<?php get_footer(); ?>
