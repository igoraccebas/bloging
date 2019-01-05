<?php
function TTBA_styles(){
	//Adding stylesheets

	wp_register_style( 'normalize',  get_template_directory_uri() . '/css/normalize.css' , array(), '8.0.0' );
	wp_register_style( 'style',  get_template_directory_uri() . '/style.css' , array(), '1.0' );


//Enque the styles

wp_enqueue_style('normalize');
wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'TTBA_styles');

// Add Menu

function TTBA_menu(){
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'TTBA')
	));
}
add_action('init', 'TTBA_menu');