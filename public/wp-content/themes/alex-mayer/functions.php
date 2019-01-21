<?php
// enqueue scripts and styles
function enqueue_scripts_and_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri().'/style.18b188decdd06e09bd5e.css?deddb9b098020468e923', array(), null, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/main.1f3b7c6dc1c68fbbed0d.js?deddb9b098020468e923', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

function add_title_tag() {
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header-menu', 'header');
    register_nav_menu('footer-menu', 'footer');
}
add_action( 'after_setup_theme', 'add_title_tag');



// function alex_mayer_theme_setup() {
//     add_theme_support('menus');
//     register_nav_menu('primary', 'Primary Header Navigation');
// }
// add_action('init', 'alex_mayer_theme_setup');
?>
