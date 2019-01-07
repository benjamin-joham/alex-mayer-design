<?php
// enqueue scripts and styles
function enqueue_scripts_and_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri().'/style.d8023bc4710469490ba2.css?e9dee933556368b46513', array(), null, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/main.f373aad67e4588c5dfe1.js?e9dee933556368b46513', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

// function add_title_tag() {
//     add_theme_support( 'title-tag' );
// }
// add_action( 'after_setup_theme', 'add_title_tag');

// function alex_mayer_theme_setup() {
//     add_theme_support('menus');
//     register_nav_menu('primary', 'Primary Header Navigation');
// }
// add_action('init', 'alex_mayer_theme_setup');
?>
