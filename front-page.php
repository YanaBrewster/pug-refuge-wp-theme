<!-- Header -->
<?php get_header(); ?>

<?php if(has_header_image()): ?>
    <div class="px-0 py-0 mt-0 mb-4">
        <div class="headerImage" style="background-image:url(<?php echo get_header_image(); ?>);">
        </div>
    </div>
<?php endif; ?>

<div class="container mx-auto">
      <h2 class="myHeadings text-center my-5"> <?php the_title(); ?></h2>
      <?php get_template_part('includes/section','content'); ?>
</div>

<!-- Footer -->
<?php get_footer(); ?>
