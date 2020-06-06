<?php get_header(); ?>

<div class="container">
<div class="row">
  <div id="sidebar-primary" class="sidebar">
      <?php if ( is_active_sidebar( 'primary' ) ) : ?>
          <?php dynamic_sidebar( 'primary' ); ?>
      <?php else : ?>
      <?php endif; ?>
  </div>

  <div class="col">
    <?php if(has_post_thumbnail()): ?>

  <?php endif; ?>

     <h1 class="myHeadings"> <?php the_title(); ?>  </h1>
      <?php get_template_part('includes/section','residents'); ?>
         <?php wp_link_pages(); ?>
         <?php  echo get_the_date('F j, Y g:i a');?>

         <ul>
           <li> Category: <?php echo get_post_meta($post->ID, 'category', true); ?> </li>
           <?php if (get_post_meta($post->ID, 'name', true)): ?>
              <li> Name: <?php echo get_post_meta($post->ID, 'name', true); ?> </li>
           <?php endif; ?>
         </ul>
  </div>

</div>
</div>

<?php get_footer(); ?>
