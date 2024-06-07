<?php

function bentetheme_enqueue_styles() {
	wp_enqueue_style(
		'bentetheme-style',
		get_stylesheet_uri()
	);
}
add_action( 'wp_enqueue_scripts', 'bentetheme_enqueue_styles' );
add_theme_support( 'post-thumbnails' );


function register_my_menus() {
	register_nav_menus(
		[
			'header' => __( 'Header Menu', 'Bente-thema' ),
			'footer-menu'  => __( 'Footer Menu', 'Bente-thema' ),
		]
	);
}

add_action( 'init', 'register_my_menus' );


function add_additional_class_on_li($classes, $item, $args) {
	if(isset($args->add_li_class)) {
		$classes[] = $args->add_li_class;
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


function add_additional_class_on_a($attributes, $item, $args) {
    if ( empty( $attributes['class'] ) ) {
		$attributes['class'] = '';
	}
	
	if(isset($args->add_a_class)) {
		$attributes['class'] .= ' ' . $args->add_a_class;
	}
	return $attributes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


function add_theme_widgets() {
	register_sidebar( 
        [
            'name'          => __( 'Footer Widget Area', 'Text_Domain' ),
            'id'            => 'referentie_id',
            'description'   => __( 'A widget area located in the footer.', 'Text_Domain' ),
            'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ] 
    );
}

add_action( 'widgets_init', 'add_theme_widgets' );