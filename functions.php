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

add_action('wp_enqueue_scripts', 'customjs');


// navigation

add_theme_support('menu');

function load_nav() {
    register_nav_menu('primary', __('primary nav menu'));
}
add_action('init', 'load_nav');