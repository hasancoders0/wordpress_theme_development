<?php

// css and jquery file calling
function sundarban_js_css_file(){
    //default css calling
    wp_enqueue_style( 'sundarban_style', get_stylesheet_uri());
    //custom css calling
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2' );
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0' ,'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
    //custom js calling
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');
}
add_action( 'wp_enqueue_scripts','sundarban_js_css_file' );

function sundarban_add_google_font(){
    wp_enqueue_style('sundarban_google_font','https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap', 
    false );
}
add_action( 'wp_enqueue_scripts','sundarban_add_google_font' );
