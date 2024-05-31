<?php

function m8prog_enqueue_styles() {
	wp_enqueue_style(
		'bentetheme-style',
		get_stylesheet_uri()
	);
}
add_action( 'wp_enqueue_scripts', 'bentetheme_enqueue_styles' );
add_theme_support( 'post-thumbnails' );