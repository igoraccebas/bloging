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

function Blog_menu(){
	register_nav_menus(array(
		'header-menu' => __('Header Menu', 'BLOG')
	));
}
add_action('init', 'Blog_menu');

// Removing the admin bar from the head of the website

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
