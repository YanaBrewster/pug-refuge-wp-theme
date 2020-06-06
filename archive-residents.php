<!-- Header -->
<?php get_header(); ?>

<div class="container">
  <div class="row">

    <div id="sidebar-primary" class="sidebar">
      <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'primary' ); ?>
      <?php else : ?>
      <?php endif; ?>
    </div>

    <div class="col mx-auto">
      <?php get_template_part('includes/section','residents'); ?>
    </div>

  </div>
</div>

<!-- Footer -->
<?php get_footer(); ?>
