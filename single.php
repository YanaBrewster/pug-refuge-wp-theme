<!-- Header -->
<?php get_header(); ?>

<div class="container my-4 mx-4">

  <div class="row">

    <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3  mb-4">
      <div id="sidebar-secondary" class="sidebar card px-3 py-3">
        <?php if ( is_active_sidebar( 'secondary' ) ) : ?>
          <?php dynamic_sidebar( 'secondary' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4">
      <?php if(has_post_thumbnail()): ?>

        <div>
          <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="center-l img-fluid img-thumbnail mb-3">
        </div>

      <?php endif; ?>

      <h2 class="myHeadings mb-3"> <?php the_title(); ?> </h2>
      <?php get_template_part('includes/section','blogcontent'); ?>
      <?php wp_link_pages(); ?>
    </div>

          <?php comments_template();?>

  </div>

</div>
<!-- Footer -->
<?php get_footer(); ?>
