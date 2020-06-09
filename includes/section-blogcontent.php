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


    <?php
    $tags = get_the_tags();

    ?>
    <p><b> Tags:
      <?php
      echo ' ';

      if($tags):
        foreach($tags as $tag):?>

        <a href="<?php echo get_tag_link($tag -> term_id);  ?>">
          <?php echo  $tag -> name; ?>
        </a>

      <?php endforeach;
    else:
    endif;
    ?>
  </b></p>

  <?php
  $categories = get_the_category();
  ?>
  <p><b> Categories:
<?php the_category(', ') ?>
</b></p>

<?php comments_template();?>

<?php

endwhile;
else:
endif;

?>
