<!-- Header -->
<?php get_header(); ?>

<div class="container">

  <div class="row">

    <div class="col">
      <div id="sidebar-secondary" class="sidebar">
        <?php if ( is_active_sidebar( 'secondary' ) ) : ?>
          <?php dynamic_sidebar( 'secondary' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col">
      <?php if(has_post_thumbnail()): ?>

        <div>
          <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail">
        </div>

      <?php endif; ?>

      <h1 class="myHeadings"> <?php the_title(); ?> </h1>
      <?php get_template_part('includes/section','blogcontent'); ?>
      <?php wp_link_pages(); ?>
    </div>

  </div>

</div>
<!-- Footer -->
<?php get_footer(); ?>
