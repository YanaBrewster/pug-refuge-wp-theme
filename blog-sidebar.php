<div id="blog-sidebar" class="sidebar card px-3 py-3">
  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
  <?php else : ?>
  <?php endif; ?>
</div>
