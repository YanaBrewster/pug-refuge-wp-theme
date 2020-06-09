<?php get_header(); ?>

<div class="container my-4 mx-4">

<div class="row">

  <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3">
    <div id="sidebar-primary" class="sidebar card px-3 py-3">
    <?php if ( is_active_sidebar( 'primary' ) ) : ?>
        <?php dynamic_sidebar( 'primary' ); ?>
    <?php else : ?>
    <?php endif; ?>
    </div>
  </div>

  <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-7 ml-lg-4 mb-4">
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
