<?php get_header(); ?>

<div class="container my-4 mx-4">

<div class="row">

  <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3">
    <?php get_sidebar( 'page-sidebar' ); ?>
  </div>

  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4 mb-4 px-0 py-0">
    <?php if(has_post_thumbnail()): ?>
  <?php endif; ?>

     <h2 class="myHeadings mt-3"> <?php the_title(); ?>  </h2>
      <?php get_template_part('includes/section','residents'); ?>
         <?php wp_link_pages(); ?>

  </div>

</div>

</div>

<?php get_footer(); ?>
