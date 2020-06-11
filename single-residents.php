<?php get_header(); ?>

<section class="container my-2 mx-2 mt-4 mb-4">

  <div class="row">

    <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3">
      <div id="page-sidebar" class="widget card px-3 py-3">
        <?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'page-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9 mb-4 px-0 py-0">
      <?php if(has_post_thumbnail()): ?>
      <?php endif; ?>

      <h2 class="myHeadings mt-3"> <?php the_title(); ?>  </h2>
      <?php get_template_part('includes/section','residents'); ?>
      <?php wp_link_pages(); ?>

    </div>

  </div>

</section>

<?php get_footer(); ?>
