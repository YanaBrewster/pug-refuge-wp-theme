<!-- Header -->
<?php get_header(); ?>

<div class="container my-4 mx-4">
  <div class="row">

  <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3 mb-4">
    <div id="sidebar-primary" class="sidebar card px-3 py-3">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>
    <?php endif; ?>
    </div>
  </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4">
      <?php get_template_part('includes/section','residents'); ?>
    </div>

  </div>
</div>

<!-- Footer -->
<?php get_footer(); ?>
