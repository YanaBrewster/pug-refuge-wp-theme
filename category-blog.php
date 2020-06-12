<!-- Header -->
<?php get_header(); ?>

<section class="container my-2 mx-2 mt-4 mb-4">
  <div class="row">

<div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4">
  <?php get_template_part('includes/section','archive'); ?>

  <?php previous_posts_link();  ?>
  <?php next_posts_link();  ?>

</div>

</div>
</section>
<!-- Footer -->
<?php get_footer(); ?>
