<?php


function sundarban_header_area_customize($wp_customize){
    $wp_customize->add_section('sundarban_header_area', array(
        'title'=>__('Header Area', 'sundarban'),
        'description' => 'Please Update Your Site Logo Here.'
    ));

    $wp_customize->add_setting('sundarban_theme_logo', array(
        'default' => get_bloginfo('template_directory'). '/img/logo.png',
    ));
    

    
    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'sundarban_theme_logo',array(
        'lebel' => 'Logo Upload',
        'discription' => 'Upload your own Logo',
        'setting' => 'sundarban_theme_logo',
        'section' => 'sundarban_header_area',
    )));

      // Menu Position Option
  $wp_customize->add_section('sundarban_menu_option', array(
    'title' => __('Menu Position', 'sundarban'),
    'description' => 'Set Menu Position.'
  ));

  $wp_customize->add_setting('sundarban_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('sundarban_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'sundarban_menu_position',
    'section' => 'sundarban_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));
 

//Footer Option
  $wp_customize->add_section('sundarban_footer_option', array(
    'title' => __('Footer Option', 'sundarban'),
    'description' => 'Set Footer text.'
  ));
    //footer option
  $wp_customize->add_setting('sundarban_footer_copyright_section', array(
    'default' => '&copy; Copyrighy 2022 | Sundarban ',
  ));

  $wp_customize-> add_control('sundarban_footer_copyright_section', array(
    'label' => 'Footer Option',
    'description' => 'Write your footer text',
    'setting' => 'sundarban_footer_copyright_section',
    'section' => 'sundarban_footer_option',
  ));

  //Theme color
  $wp_customize-> add_section('sundarban_colors', array(
    'title' => __('Theme Color', 'sundarban'),
    'description'=> 'If need you can change your theme color.',
  ));
  $wp_customize-> add_setting('sundarban_bg_color',array(
    'default' => '#ffffff',
  ));
  $wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'sundarban_bg_color', array(
    'label' => 'Background Color',
    'section' => 'sundarban_colors',
    'settings' => 'sundarban_bg_color',
  )));

  $wp_customize-> add_setting('sundarban_primary_color',array(
    'default' => '#ea1a70',
  ));
  $wp_customize-> add_control(new WP_Customize_Color_Control($wp_customize, 'sundarban_primary_color', array(
    'label' => 'Primary Color',
    'section' => 'sundarban_colors',
    'settings' => 'sundarban_primary_color',
  )));


  
}
add_action( 'customize_register','sundarban_header_area_customize' );

function sundarban_theme_color_Cus(){
  ?>
  <style>
    body{background: <?php echo get_theme_mod( 'sundarban_bg_color'); ?>}
    :root{--pink:<?php echo get_theme_mod ('sundarban_primary_color'); ?>}
  </style>
  <?php
}
add_action( 'wp_head','sundarban_theme_color_cus' );
