     
//code entry insite function "function sundarban_header_area_customize"
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
