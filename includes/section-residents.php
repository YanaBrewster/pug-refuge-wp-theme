<div class="container my-4 mx-4">

  <?php
  if (have_posts()) :
    while (have_posts()):
      the_post();
      ?>

      <div class="row">
        <div class="col">

          <a href="<?php the_permalink(); ?>">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid img-thumbnail">
            <?php endif; ?>
          </a>

          <!-- Get the date -->
          <h5>
            <?php  echo get_the_date('h:i:s d/m/Y');?>
          </h5>

          <p>
            <?php
            the_content();
            ?>
          </p>


          <?php
          $tags = get_the_tags();
          if($tags):
            foreach($tags as $tag):?>

            <a class="text-light" href="<?php echo get_tag_link($tag -> term_id);  ?>">
              <?php echo $tag -> name; ?>
            </a>

          <?php endforeach;
        else:
        endif; ?>

        <?php
        $categories = get_the_category();
        foreach($categories as $cat):?>

        <a href="<?php echo get_category_link($cat->term_id); ?>">
          <?php echo $cat->name; //go and add single_cat_title() in archive ?>
        </a>
      <?php endforeach; ?>


      <?php comments_template();?>
      <!-- /to get multiple parts of a page add this in single.php -->

      <?php

    endwhile;
  else:
  endif;

  ?>
    </div>
  </div>
</div>
