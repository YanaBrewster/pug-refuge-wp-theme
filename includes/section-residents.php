<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    ?>

    <div class="row">
      <div class="col-11 col-xs-11 col-sm-10 col-md-10 col-lg-12">

        <a href="<?php the_permalink(); ?>">
          <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail mb-4">
          <?php endif; ?>
        </a>

        <!-- Get the date -->
        <p><i>
          <?php  echo get_the_date('F j, Y g:i a');?>
        </i></p>

        <p>
          <?php
          the_content();
          ?>
        </p>

        <?php

      endwhile;
    else:
    endif;

    ?>
  </div>
</div>
