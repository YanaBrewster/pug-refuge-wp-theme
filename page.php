<!-- Header -->
<?php get_header(); ?>

<div class="container">

  <section class="row">

    <div class="col">

      <h2 class="myHeadings"> <?php the_title(); ?> </h2>

      <?php if(has_post_thumbnail()): ?>

          <div>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail">
          </div>

      <?php endif; ?>

      <?php get_template_part('includes/section','content'); ?>
    </div>
</div>
<!-- Footer -->
<?php get_footer(); ?>
