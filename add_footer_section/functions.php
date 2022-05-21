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
