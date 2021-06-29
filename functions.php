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

    register_nav_menus(array(
        'primary' => __('primary nav menu', 'jasmine-theme'),
        'footer' => __('footer-menu', 'jasmine-theme')
    ));
}
add_action('init', 'load_nav');


// featured images

add_theme_support('post-thumbnails');

// required

add_theme_support( "title-tag" );   // causes "page not found" on front page, page 2+
add_theme_support( 'automatic-feed-links' );     // for RSS feed
add_theme_support( "wp-block-styles" );  //
add_theme_support( "responsive-embeds" );   //
add_theme_support( "html5" );   //
add_theme_support( "custom-header" );   //
add_theme_support( "custom-background" );   //
add_theme_support( "align-wide" );   //
add_editor_style(); //



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
    
    // set_post_thumbnail_size( 500, 200 );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'jasmine_custom_logo_setup' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );