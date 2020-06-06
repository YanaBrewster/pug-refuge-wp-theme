<!-- Header -->
<div>
  <?php get_header(); ?>
</div>

<div>
  <h3>Whoops, this page does not exist!</h3>
  <h4>Try searching for a keyword instead?</h4>
  <?php get_search_form(); ?>
</div>

<!-- Sidebar -->
<div class="widget">
  <?php if(is_active_sidebar('sidebar-primary')): ?>
    <?php dynamic_sidebar('sidebar-primary'); ?>
  <?php endif; ?>
</div>

<!-- Footer -->
<div>
  <?php get_footer(); ?>
</div>
