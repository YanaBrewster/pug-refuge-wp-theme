<!-- Header -->
<div>
  <?php get_header(); ?>
</div>

<section class="container my-2 mx-2 mt-4 mb-4">

  <div class="row">

    <div class="col-8 col-xs-8 col-sm-8 col-md-8 col-lg-3 mb-4">
      <div id="blog-sidebar" class="widget card px-3 py-3">
        <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
      <div id="page-sidebar" class="widget card px-3 py-3">
        <?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'page-sidebar' ); ?>
        <?php else : ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-9">
      <h3 class="mt-5">Whoops, this page does not exist!</h3>
      <h4>Try searching for a keyword instead?</h4>
      <div class="col-10 col-xs-10 col-sm-10 col-md-10 col-lg-5">
        <?php get_search_form(); ?></div>
      </div>

    </div>
  </section>
  <!-- Footer -->
  <div>
    <?php get_footer(); ?>
  </div>
