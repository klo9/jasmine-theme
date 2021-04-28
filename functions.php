<?php

function load_stylesheets() {
    wp_register_style('basic_styles', get_template_directory_uri() . '/assets/css/basic.css');
    wp_register_style('jasmine_styles', get_template_directory_uri() . '/assets/css/styles.css');

    wp_enqueue_style('basic_styles');
    wp_enqueue_style('jasmine_styles');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js() {
    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);

    wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'customjs');