<?php
// enqueue scripts and styles
function enqueue_scripts_and_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri().'/style.29385c1cce7af2781e27.css?033d4b48c03dd3153541', array(), null, false);
    wp_enqueue_script( 'main-js', get_template_directory_uri().'/main.52a6f4d75aac05ab1a27.js?033d4b48c03dd3153541', array(), null, false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );

function add_title_tag() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'add_title_tag');
?>
