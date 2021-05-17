<?php
/**
 * Affreview Theme Customizer
 *
 * @package TR_Affreview_Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function tr_affreview_lite_customize_register( $wp_customize ) {

	if ( ! function_exists( 'tr_affreview_lite_sanitize_choices' ) ) :

	//Sanitize radio values

	function tr_affreview_lite_sanitize_choices( $input, $setting ) {
	  
	  // Ensure input is a slug
	  $input = sanitize_key( $input );
	  
	  // Get list of choices from the control
	  // associated with the setting
	  $choices = $setting->manager->get_control( $setting->id )->choices;
	  
	  // If the input is a valid key, return it;
	  // otherwise, return the default
	  return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
	endif;


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'tr_affreview_lite_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'tr_affreview_lite_customize_partial_blogdescription',
		) );
	}

//Theme Help

	$wp_customize->add_section('theme_help', array(
	    'title' => __('Theme Help', 'tr-affreview-lite'),
	    'priority' => 10,
	) );

	$wp_customize->add_setting('theme_help', array(
	    'default'     => '',
	    'transport'   => 'refresh',
	    'sanitize_callback' => 'wp_kses_post'
	));

	$theme_author_link = 'https://www.themerally.com/product/blog-theme-for-blogger-and-affiliate-marketers/';

	$wp_customize->add_control( 'theme_help', array(
	  'label' => __('Welcome to Affreview Support!', 'tr-affreview-lite'),
	  'section' => 'theme_help',
	  'settings' => 'theme_help',
	  'type' => 'hidden',
	  'description' => __('Affreview is a great theme for any business and blogger. You can use it to have more conversion to your site and business. For support and documentation please visit this link  : ' , 'tr-affreview-lite'). '<a href="'.esc_url($theme_author_link).'" target="_blank">https://www.themerally.com/</a>'
	) );

// Layout Options

	$wp_customize->add_section( 'layout' ,array(
		'title' => __('Layout', 'tr-affreview-lite'),
		'priority' => 20
	));
	$wp_customize->add_setting( 'layout_options' , array(
	      'default'     => 'right-sidebar',
	      'transport'   => 'refresh',
	      'sanitize_callback' => 'tr_affreview_lite_sanitize_choices',
	  ) );

	$wp_customize->add_control( 'layout_options', array(
		  'label' => __('Select Your Layout', 'tr-affreview-lite'),
		  'section' => 'layout',
		  'settings' => 'layout_options',
		  'type' => 'radio',
		  'choices' => array(
		    'right-sidebar' => __('Right Sidebar' , 'tr-affreview-lite'),
		    'left-sidebar' => __('Left Sidebar' , 'tr-affreview-lite'),
		    'full-width' => __('Full Width' , 'tr-affreview-lite')
		  ),
	) );

//Footer Options

	$wp_customize->add_section( 'footer' , array(
	    'title'      => __('Footer', 'tr-affreview-lite'),
	    'priority' => 21
	) );

	$wp_customize->add_setting( 'footer_copyright' , array(
	    'default'     => '',
	    'transport'   => 'refresh',
	    'sanitize_callback' => 'wp_kses_post'
	) );

	$wp_customize->add_control( 'footer_copyright', array(
	  'label' => __('Copyright Content', 'tr-affreview-lite'),
	  'section' => 'footer',
	  'settings' => 'footer_copyright',
	  'type' => 'textarea'
	) );


}
add_action( 'customize_register', 'tr_affreview_lite_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function tr_affreview_lite_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function tr_affreview_lite_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function tr_affreview_lite_customize_preview_js() {
	wp_enqueue_script( 'affreview-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'tr_affreview_lite_customize_preview_js' );
