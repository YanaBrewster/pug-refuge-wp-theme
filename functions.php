<?php

//Load Stylesheets
function load_css(){

  wp_enqueue_style('bootstrap');

  wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
  wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts','load_css');


//Load Javascript
function load_js()
{

		wp_enqueue_script('jquery');

		wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
		wp_enqueue_script('bootstrap');

    wp_register_script('js', get_template_directory_uri() . '/js/script.js', array('jquery'), false, true);
		wp_enqueue_script('js');


}
add_action('wp_enqueue_scripts', 'load_js');
// =============================================================================

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
add_theme_support( 'custom-header' );


// =============================================================================

// Max-content Width

if ( ! isset ( $content_width) )
    $content_width = 800;

// =============================================================================

// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
    'footer-menu' => 'Footer Menu Location',
  )
);

// Register Custom Navigation Walker

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// =============================================================================

//Custom Image Size
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-medium', 600, 300, false);
add_image_size('blog-small', 300, 200, true);

// =============================================================================

// Register Sidebars
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {

    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Page Sidebar' ),
            'description'   => __( 'Main sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="myHeadings widget-title px-3 py-3">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'secondary',
            'name'          => __( 'Blog Sidebar' ),
            'description'   => __( 'Blog sidebar for main archive.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="myHeadings widget-title px-3 py-3">',
            'after_title'   => '</h3>',
        )
    );
}

// =============================================================================

// Custom Post Type
function my_first_post_type(){
  $args = array(
    'labels' => array(
      'name' => 'Residents',
      'singular_name' => 'Resident',
    ),
    'hierarchical' => true,
    'menu_icon' => 'dashicons-admin-home',
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail','custom-fields'),

  );
  register_post_type('residents',$args);
}
add_action('init','my_first_post_type');

// =============================================================================

// Taxanomy
function my_first_taxonomy(){
  $args = array(
    'labels' => array(
      'name' => 'Status',
      'singular_name' => 'Status',
    ),

    'public' => true,
    'hierarchical' => true,

  );
  register_taxonomy('status', array('residents'),$args);

}
add_action('init', 'my_first_taxonomy');

// =============================================================================

//Header Image

register_default_headers( array(
    'defaultImage' => array(
        'url'           => get_template_directory_uri() . '/images/headers/default.jpg',
        'thumbnail_url' => get_template_directory_uri() . '/images/headers/default.jpg',
        'description'   => __( 'The default image for the custom header.', 'charityShopTheme' )
    )
) );

$customHeaderDefaults = array(
    'width' => 1280,
    'height' => 720,
    'default-image' => get_template_directory_uri() . '/images/headers/default.jpg'
);
add_theme_support('custom-header', $customHeaderDefaults);

// =============================================================================

// Woocommerce Cart
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css' );
}

function my_header_add_to_cart_fragment( $fragments ) {

    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-contents-count"><?php echo esc_html( $count ); ?></span>
        <?php
    }
        ?></a><?php

    $fragments['a.cart-contents'] = ob_get_clean();

    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );

// =============================================================================

//Customize API
require_once get_template_directory() . '/customizer.php';
