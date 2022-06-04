<?php
//Sidebar Register function

function sundarban_widgets_register(){
    register_sidebar( array(
        'name'  => __('Main Widget Area', 'sundarban'),
        'id'    => 'sidebar-1',
        'description' =>__('Apperes in the sidebar in blog page and also other page', 'sundarban'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'  => __('Footer Widget Area Left', 'sundarban'),
        'id'    => 'footer-1',
        'description' =>__('Apperes in the sidebar in blog page and also other page', 'sundarban'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'  => __('Footer Widget Area Mid', 'sundarban'),
        'id'    => 'footer-2',
        'description' =>__('Apperes in the sidebar in blog page and also other page', 'sundarban'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'  => __('Footer Widget Area Right', 'sundarban'),
        'id'    => 'footer-3',
        'description' =>__('Apperes in the sidebar in blog page and also other page', 'sundarban'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init','sundarban_widgets_register' );
