<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
    ?>

    <!-- Get the date -->
    <p>
      <?php  echo get_the_date('F j, Y g:i a');?>
    </p>

    <?php
    the_content();
    ?>

    <?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
    ?>

    <p class="font-italic"> <?php echo 'Posted by ' . $fname . ' ' . $lname; ?> </p>

    <?php the_tags( '<p><b>Tags:</b> ', ', ', '<br /></p>'); ?>

    <p><b> Categories: <?php the_category(', ') ?></b></p>

    <?php

  endwhile;
else:
endif;

?>
