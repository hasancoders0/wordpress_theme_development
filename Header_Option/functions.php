//Theme Function\Header area
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

  
}
add_action( 'customize_register','sundarban_header_area_customize' );

register_nav_menu('main_menu',__('Main Menu','sundarban' ));


