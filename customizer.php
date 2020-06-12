<?php

//Hook1
function mytheme_customize_register( $wp_customize ) {


   // Background Colour
   $wp_customize->add_setting( 'charityShopTheme_backgroundColour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charityShopTheme_backgroundColourControl', array(
   	'label'      => __( 'Background Colour', 'charityShopTheme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'charityShopTheme_backgroundColour',
   ) ) );

   // Header and Footer Background Colour
    $wp_customize->add_setting( 'charityShopTheme_headerFooterColour' , array(
        'default'   => '#dfbf9f',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charityShopTheme_headerFooterColourControl', array(
    	'label'      => __( 'Header and Footer Colour', 'charityShopTheme' ),
     'description' => 'Change the Header and Footer Colour',
    	'section'    => 'colors',
    	'settings'   => 'charityShopTheme_headerFooterColour',
    ) ) );

// Heading Text Colour
    $wp_customize->add_setting( 'charityShopTheme_headingTextColour', array(
        'default'   => '#333333',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'charityShopTheme_headingTextColourControl', array(
      'label'      => __( 'Heading Text Colour', 'charityShopTheme' ),
     'description' => 'Change the Heading Text Colour',
      'section'    => 'colors',
      'settings'   => 'charityShopTheme_headingTextColour',
    ) ) );

   // Footer Message
   $wp_customize->add_section( 'charityShopTheme_footerSection' , array(
       'title'      => __( 'Footer Text', 'charityShopTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'charityShopTheme_footerMessage' , array(
       'default'   => 'Copyright &copy; 2020',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'charityShopTheme_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'charityShopTheme' ),
     'section'    => 'charityShopTheme_footerSection',
     'settings'   => 'charityShopTheme_footerMessage',
   ) ) );

   // Site Title Text
   $wp_customize->add_section( 'charityShopTheme_siteTitleTextSection' , array(
       'title'      => __( 'Site Title Text', 'charityShopTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'charityShopTheme_siteTitleText' , array(
       'default'   => 'Site Title',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'charityShopTheme_siteTitleTextControl', array(
     'label'      => __( 'Site Title Text', 'charityShopTheme' ),
     'section'    => 'charityShopTheme_siteTitleTextSection',
     'settings'   => 'charityShopTheme_siteTitleText',
   ) ) );


   }

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2:
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('charityShopTheme_backgroundColour','#ffffff'); ?>!important;
         }
   .myTheme{
             background-color: <?php echo get_theme_mod('charityShopTheme_headerFooterColour', '#dfbf9f'); ?>!important ;
           }
    .myHeadings{
        color: <?php echo get_theme_mod('charityShopTheme_headingTextColour', '#333333'); ?>!important ;
    }

  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
