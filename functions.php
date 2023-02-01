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