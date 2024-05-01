<?php

function my_theme_enqueue_styles() {

    $parent_style = 'parent-style'; 
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css?v='.time());
	   wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css?v='.time(),
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
