<?php /* Template Name: Text Page */ ?>
<!-- Header -->
<?php get_header(); ?>

<section class="mx-auto mx-2 my-2 mb-5">

  <h2 class="myHeadings text-center my-5"> <?php the_title(); ?></h2>

  <div class="text-box mx-auto">
    <?php get_template_part('includes/section','content'); ?>
  </div>

</section>
<!-- Footer -->
<?php get_footer(); ?>
