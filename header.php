<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html lang="en" dir="ltr"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="author" content="Yana Brewster">
  <meta name="description" content="Yana Brewsters 'Pug Refuge' charity shop Wordpress theme created for a Yoobee Web/UX assignment.">
  <meta name="keywords" content="Wordpress, custom theme, Wellington, New Zealand, website template, UX design, website design">
  <script src="https://kit.fontawesome.com/8c9236379a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>

  <header class="myTheme pb-2">

    <!-- main top navigation -->
    <nav class="top-nav">

      <div class="row">

        <!-- logo -->
        <div class="col-4 col-xs-4 col-sm-4 col-md-4 col-lg-12">
          <a class="navbar-brand center-l" href="#">
            <h1 class="siteTitle myTheme text-center mr-5 pr-5 mt-2 mt-xs-2 mt-sm-2 mt-md-2 mt-lg-2"><i class="fas fa-paw ml-3 mr-3 mt-2"></i><?php echo get_theme_mod('charityShopTheme_siteTitleText'); ?></h1>
          </a>
        </div>

        <!-- menu -->
        <div class="col-5 col-xs-5 col-sm-5 col-md-5 col-lg-9">
          <div class="navbar navbar-expand-lg float-right">

            <button class="navbar-toggler navbar-light mt-2 ml-5" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <span class="mr-2 center-l">
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
            </span>
          </div>
        </div>

        <!-- Shopping cart -->
        <div class="col-3 col-xs-3 col-sm-3 col-md-3 col-lg-3 mt-2">

          <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
            $count = WC()->cart->cart_contents_count;
            ?><a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
            if ( $count > 0 ) {
              ?>
              <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
              <?php
            }
            ?></a>
          <?php } ?>

        </div>

      </div>   <!-- End of row -->

    </nav>


  </header>
