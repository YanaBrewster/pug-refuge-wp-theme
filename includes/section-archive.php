<section class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12">

  <?php
  if (have_posts()) :
    while (have_posts()):
      the_post();
      ?>
      <div class="card mb-3 mt-3">
        <div class="card-body">

          <?php if(has_post_thumbnail()): ?>
            <div>
              <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="center img-fluid img-thumbnail">
            </div>
          <?php endif; ?>

          <h2 class="myHeadings mt-3"> <?php the_title(); ?></h2>
          <p><?php echo get_the_date('F j, Y g:i a'); ?></p>
          <?php
          the_excerpt();
          ?>
          <div class="text-center">
            <a href="<?php the_permalink(); ?>" class="btn btn-lg btn-dark rounded"> Read More </a>
          </div>

        </div>
      </div>

    <?php endwhile;
  else:
  endif;
  ?>

</section>
