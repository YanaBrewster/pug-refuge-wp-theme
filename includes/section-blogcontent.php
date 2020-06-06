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
    the_author();
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

      <a class="" href="<?php echo get_tag_link($tag -> term_id);  ?>">
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
      <?php
      echo ' ';
  foreach($categories as $cat):?>

  <a href="<?php echo get_category_link($cat->term_id); ?>">
    <?php echo $cat->name;?>
  </a>

<?php endforeach; ?>
</b></p>

<?php //comments_template();?>
<!-- /to get multiple parts of a page add this in single.php -->

<?php

  endwhile;
 else:
endif;

?>
