<?php

function m8prog_enqueue_styles() {
	wp_enqueue_style(
		'bentetheme-style',
		get_stylesheet_uri()
	);
}
add_action( 'wp_enqueue_scripts', 'bentetheme_enqueue_styles' );
add_theme_support( 'post-thumbnails' );

echo '<pre style="background:#ed55cf; padding: 2rem; width:80%;">';
print_r( 'Fancy mooie pagina yay :)' );
echo '</pre>';
die(__FILE__.':'.__LINE__);