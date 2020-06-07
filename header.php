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
  <script src="https://kit.fontawesome.com/8c9236379a.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
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

<!-- Shopping cart -->

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

          </nav>





        </div>

      </div>   <!-- end of row -->

    </nav>


  </header>
