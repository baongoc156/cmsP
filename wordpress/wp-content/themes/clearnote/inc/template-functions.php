<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Clearnote
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function clearnote_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	$sidebar_position = get_theme_mod( 'clearnote_blog_sidebar', 'right-sidebar' );

	if( is_active_sidebar( 'sidebar-1' ) && 'none' !== $sidebar_position ) {
		$classes[] = esc_attr( $sidebar_position );
	}

	return $classes;
}
add_filter( 'body_class', 'clearnote_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function clearnote_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'clearnote_pingback_header' );

/**
 * Prints primary content wrapper CSS classes.
 *
 * @since  1.0.0
 * @param  array $classes Additional classes.
 * @return void
 */
function clearnote_primary_content_class( $classes = array() ) {
	echo clearnote_get_layout_classes( 'content', $classes );
}

/**
 * Prints secondary content wrapper CSS classes.
 *
 * @since  1.0.0
 * @param  array $classes Additional classes.
 * @return void
 */
function clearnote_secondary_content_class( $classes = '' ) {
	echo clearnote_get_layout_classes( 'sidebar', $classes );
}

/**
 * Get CSS class attribute for passed layout context.
 *
 * @since  1.0.0
 * @param  string $layout  Layout context.
 * @param  array  $classes Additional classes.
 * @return string
 */
function clearnote_get_layout_classes( $layout = 'content', $classes = '' ) {

	$sidebar_position = get_theme_mod( 'clearnote_blog_sidebar', 'right-sidebar' );

	switch ( $sidebar_position ) {

		case 'left-sidebar':
			$content_class = $classes . ' col-xs-12 col-md-9 col-md-push-3';
			$sidebar_class = $classes . ' col-xs-12 col-md-3 col-md-pull-9';

		break;

		case 'right-sidebar':
			$content_class = $classes . ' col-xs-12 col-md-9';
			$sidebar_class = $classes . ' col-xs-12 col-md-3';

		break;

		case 'none':
			$content_class = $classes . ' col-md-8 col-md-push-0';
			$sidebar_class = $classes;

		break;
	}

	$layout_classes = ( $layout == 'content' ) ? $content_class : $sidebar_class;

	return 'class="' . $layout_classes . '"';
	
}

if ( ! function_exists( 'clearnote_header_logo' ) ) :
/**
 * Display the header logo.
 *
 * @since  1.0.0
 * @return void
 */
function clearnote_header_logo() {
	if ( has_custom_logo() ) {
		$logo = get_custom_logo();
		$type = 'image';

		$hidden = '';
	} else {
		$logo = sprintf( '<a class="site-logo__link" href="%1$s" rel="home">%2$s</a>', esc_url( home_url( '/' ) ), esc_attr( get_bloginfo( 'name', 'display' ) ) );
		$type = 'text h1-style';

		$hidden = ( display_header_text() == false ) ? ' hidden="hidden"' : '';
	}

	if ( is_front_page() && is_home() ) {
		$tag = 'h1';
	} else {
		$tag = 'div';
	}

	$class_logo = $type . ' ';

	$description = get_bloginfo( 'description', 'display' );
	if ( $description || is_customize_preview() ) {
		$description = '<p class="site-description">' . esc_html( $description ) . '</p>';
	}

	printf(
		'<%1$s class="site-title site-logo--%3$s"%4$s>%2$s</%1$s>%5$s',
		esc_attr( $tag ),
		wp_kses_post( wp_unslash( $logo ) ),
		esc_attr( $class_logo ),
		esc_attr( $hidden ),
		$description
	);
}
endif;

/**
 * Set callback function for header image.
 */

if ( !function_exists( 'clearnote_set_header_image' ) ):
	
	function clearnote_set_header_image() {

		if ( ! get_header_image() ) {
			return null;
		}

		$url = get_header_image();

		echo '<div class="site-header__image" style="background-image:url(' . esc_url( $url ) . ')"></div>';
	}
endif;

/**
 * Generate dynamic css
 */

if ( !function_exists( 'clearnote_generate_dynamic_css' ) ):
	
	function clearnote_generate_dynamic_css() {
		
		ob_start();
		get_template_part( 'assets/css/dynamic-css' );
		
		$output = ob_get_contents();

		// Get all the customier css
	    $output .= apply_filters( 'clearnote_head_css', $output );

	    // Get Custom Panel CSS
	    $output .= wp_get_custom_css();

		ob_end_clean();
		
		return $output;
	}
endif;

/**
 * Render existing macros in passed string.
 *
 * @since  1.0.0
 * @param  string $string String to parse.
 * @return string
 */
function clearnote_render_macros( $string ) {

	static $macros;

	if ( ! $macros ) {
		$macros = apply_filters( 'clearnote_data_macros', array(
			'/%%year%%/'      => date( 'Y' ),
			'/%%date%%/'      => date( get_option( 'date_format' ) ),
			'/%%site-name%%/' => get_bloginfo( 'name' ),
			'/%%home_url%%/'  => esc_url( home_url( '/' ) ),
			'/%%theme_url%%/' => get_stylesheet_directory_uri(),
		) );
	}

	return preg_replace( array_keys( $macros ), array_values( $macros ), $string );
}

if ( ! function_exists( 'clearnote_footer_copyright' ) ) :
	/**
	 * Show footer copyright text.
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function clearnote_footer_copyright() {
		$copyright = get_theme_mod( 'clearnote_footer_copyright_text' );

		if ( empty( $copyright ) ) {
			return;
		}

		printf( '<div class="footer-copyright">%s</div>', wp_kses_post( clearnote_render_macros( wp_unslash( $copyright ) ) ) );
	}
endif;
