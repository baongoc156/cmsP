<?php

/**
 * Load frontend scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'clearnote_load_scripts' );

/**
 * Load scripts and styles on frontend
 */
function clearnote_load_scripts() {
	clearnote_load_style();
	clearnote_load_script();
}

/**
 * Load frontend css files
 */

function clearnote_load_style() {

	$template 		= get_template();
	$theme_obj 		= wp_get_theme( $template );
	$version 		= $theme_obj->get( 'Version' );

	wp_enqueue_style( 'clearnote-grid', get_template_directory_uri() . '/assets/css/grid.css', array(), false, 'all' );
	wp_enqueue_style( 'clearnote-google-fonts', clearnote_google_fonts_url(), array(), $version );
	wp_enqueue_style( 'clearnote-style', get_stylesheet_uri(), array(), $version, 'all' );
	wp_add_inline_style( 'clearnote-style', clearnote_generate_dynamic_css() );
}

/**
 * Load frontend js files
 */
function clearnote_load_script() {

	$template 		= get_template();
	$theme_obj 		= wp_get_theme( $template );
	$version 		= $theme_obj->get( 'Version' );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'clearnote-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'clearnote-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( 'clearnote-theme-script', get_theme_file_uri( 'assets/js/theme-script.js' ), array(), $version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

/**
 * Register Google Fonts url
 */
function clearnote_google_fonts_url(){
	
	$google_font_url = add_query_arg( 'family', urlencode( 'Montserrat:700|Open Sans:400,600|Pacifico:400|Covered By Your Grace:400&subset=latin,latin-ext' ), "//fonts.googleapis.com/css" );
    
	return $google_font_url;
}
