<?php

/**
 * Enqueues Divi parents styles in child theme
 * Enqueues Child theme scripts
 */
function divi_child_enqueue_scripts() {
	//enqueue the parent theme css
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	
	//enqueue child theme scripts
	wp_enqueue_script('divi-child-scripts', get_stylesheet_directory_uri() . '/js/child-scripts.js', array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'divi_child_enqueue_scripts' );

/**
 * Theme setup function
 */
function divi_child_setup_theme() {
	//If you need posts formats, remove theses lines
	remove_theme_support( 'post-formats', array(
		'video', 'audio', 'quote', 'gallery', 'link'
	) );
	
	//if you have i18 files... uncomment this line:
	//load_theme_textdomain( 'divichild', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'divi_child_setup_theme', 20 );


/**
 * Add your custom functions after this line
 */