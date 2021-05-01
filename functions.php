<?php

// stylesheets

function load_stylesheets() {
    wp_register_style('basic_styles', get_template_directory_uri() . '/basic.css');
    wp_enqueue_style('basic_styles');
    
    wp_register_style('jasmine_styles', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('jasmine_styles');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

// scripts

function load_js() {
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);

    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'load_js');


// navigation

function load_nav() {
    add_theme_support('menus');

    register_nav_menus(array(
        'side-nav' => __('primary nav menu'),
        'footer' => __('footer-menu')
    ));
}
add_action('init', 'load_nav');


// featured images

add_theme_support('post-thumbnails');


// custom header

// function jasmine_custom_header_setup() {
//     $args = array(
//         'default-image'      => get_template_directory_uri() . 'assets/default-image.jpg',
//         'default-text-color' => '000',
//         'width'              => 1000,
//         'height'             => 250,
//         'flex-width'         => true,
//         'flex-height'        => true,
//     );
//     add_theme_support( 'custom-header', $args );
// }
// add_action( 'after_setup_theme', 'jasmine_custom_header_setup' );


// custom logo

function jasmine_custom_logo_setup() {
    $defaults = array(
        'height'               => 50,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => false, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'jasmine_custom_logo_setup' );