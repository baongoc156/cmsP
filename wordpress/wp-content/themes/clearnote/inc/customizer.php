<?php
/**
 * Clearnote Theme Customizer
 *
 * @package Clearnote
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function clearnote_customize_register( $wp_customize ) {
	
	$path = get_template_directory();

	/**
	 * Load Customize Configs
	 *
	 * @since 1.0.0
	 */

	//	Theme Options
	require_once $path. '/inc/customize-configs/options-colors.php';
	require_once $path. '/inc/customize-configs/options-blog-posts.php';
	require_once $path. '/inc/customize-configs/options-footer.php';

	/**
	 * Site Title & Description.
	 * */
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->selective_refresh->add_partial(
		'blogname',
		array(
			'selector'        => '.site-logo__link',
			'render_callback' => 'clearnote_customize_partial_blogname',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'blogdescription',
		array(
			'selector'        => '.site-description',
			'render_callback' => 'clearnote_customize_partial_blogdescription',
		)
	);

	$wp_customize->selective_refresh->add_partial(
		'custom_logo',
		array(
			'selector'        => '.site-branding',
			'render_callback' => 'clearnote_customize_partial_site_logo',
		)
	);

	/**
	 * Selective Refresh style
	 *
	 * @since 1.0.0
	 */
	$css_settings = array(
		'clearnote_primary_color',
	);

	foreach ( $css_settings as $index => $key ) {
		if ( $wp_customize->get_setting( $key ) ) {
			$wp_customize->get_setting( $key )->transport = 'postMessage';

		} else {
			unset( $css_settings[ $index ] );
		}
	}

	$wp_customize->selective_refresh->add_partial(
		'clearnote-style',
		array(
			'selector' 				=> '#clearnote-style-inline-css',
			'settings' 				=> $css_settings,
			'container_inclusive' 	=> false,
			'render_callback' 		=> 'clearnote_generate_dynamic_css',
		)
	);
}
add_action( 'customize_register', 'clearnote_customize_register' );

/**
 * PARTIAL REFRESH FUNCTIONS
 * */
if ( ! function_exists( 'clearnote_customize_partial_blogname' ) ) {
	/**
	 * Render the site title for the selective refresh partial.
	 */
	function clearnote_customize_partial_blogname() {
		bloginfo( 'name' );
	}
}

if ( ! function_exists( 'clearnote_customize_partial_blogdescription' ) ) {
	/**
	 * Render the site description for the selective refresh partial.
	 */
	function clearnote_customize_partial_blogdescription() {
		bloginfo( 'description' );
	}
}

if ( ! function_exists( 'clearnote_customize_partial_site_logo' ) ) {
	/**
	 * Render the site logo for the selective refresh partial.
	 *
	 * Doing it this way so we don't have issues with `render_callback`'s arguments.
	 */
	function clearnote_customize_partial_site_logo() {
		clearnote_header_logo();
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function clearnote_customize_preview_js() {
	wp_enqueue_script( 'clearnote-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'clearnote_customize_preview_js' );

/**
 * Sanitize select field.
 *
 * @param  mixed $input input.
 * @param  mixed $setting settings.
 */
function clearnote_sanitize_select( $input, $setting ) {

	// Input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only.
	$input = sanitize_key( $input );

	// Get the list of possible select options.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// Return input if valid or return default option.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}

/**
 * Checkbox sanitization callback
 *
 * @since 1.0.0
 */
function clearnote_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}


/**
 * Active callback functions for the customizer
 *
 * @package Clearnote WordPress theme
 */

/* Blog Posts */
function clearnote_cac_blog_title_visible() {
	return get_theme_mod( 'clearnote_blog_title_visible', false );
}

/**
 * Get default footer copyright text.
 *
 * @since  1.0.0
 * @return string
 */
function clearnote_get_default_footer_copyright() {
	return apply_filters(
		'clearnote_default_footer_copyright_text',
		esc_html__( 'Copyright &copy; %%year%% %%site-name%%.', 'clearnote' )
	);
}