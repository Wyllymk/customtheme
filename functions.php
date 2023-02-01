<?php
function custom_scripts_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all'); //hooks
    wp_enqueue_script('customscript', get_template_directory_uri().'/js/custom.js', array(), '1.0.0', true); //hooks
}

add_action('wp_enqueue_scripts', 'custom_scripts_enqueue');

// Activating menu admin dashboard.

function custom_theme_setup(){
    add_theme_support("menus");

    register_nav_menu('primary', 'Navigation Bar');
    register_nav_menu('secondary', "Footer");
}

add_action('init', 'custom_theme_setup');

/**
 * Essential theme supports
 * */
function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );


    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support( 'custom-background', $bg_defaults );

    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support( 'custom-header', $header_defaults );

    /** custom log **/
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );

    /**Post Thumbnails */
    add_theme_support('post-thumbnails');


}
add_action('after_setup_theme','theme_setup');

/* Better way to add multiple widgets areas */

function custom_widgets_init() {
	register_sidebar( array(
		'name'          => 'Primary Sidebar',
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Secondary Sidebar',
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init','custom_widgets_init');

// Custom Nav Menu

if ( !class_exists('My_Custom_Nav_Walker') ) {
    class My_Custom_Nav_Walker extends Walker_Nav_Menu {
        
    }
}
