<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html lang="en" dir="ltr"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="Yana Brewster">
  <meta name="description" content="Yana Brewsters 'Pug Refuge' charity shop Wordpress theme created for a Yoobee Web/UX assignment.">
  <meta name="keywords" content="Wordpress, custom theme, Wellington, New Zealand, website template, UX design, website design">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>

  <header class="myTheme">

    <!-- main top navigation -->
    <nav class="top-nav navbar-expand-lg">

      <div class="row">

        <!-- logo -->
        <div class="col-3 col-lg-12 col-sm-3 com-md-3">
          <a class="navbar-brand" href="#">
            <h1 class="siteTitle myTheme d-inline"> <?php echo get_theme_mod('charityShopTheme_siteTitleText'); ?></h1>
          </a>
        </div>

        <!-- menu -->
        <div class="col-9 col-lg-12 col-sm-9 col-md-9">

          <nav class="navbar navbar-expand-md center-l">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <?php
              wp_nav_menu( array(
                'theme_location'    => 'top-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
              ?>

          </nav>

        </div>

      </div>   <!-- end of row -->

    </nav>

  </header>
