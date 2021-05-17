<?php
/**
 * CT White Theme Customizer
 *
 * @package CT_White
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ct_white_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'ct_white_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'ct_white_customize_partial_blogdescription',
			)
		);
	}
	
	$wp_customize->add_section('ct_white_social_section', array(
			'title' 	=> esc_html__('Social Icons','ct-white'),
			'priority' 	=> 70
	));
	
	$wp_customize->add_setting(
		'ct_white_social_enable', array(
			'default'	=>	1,
			'sanitize_callback'	=>	'ct_white_sanitize_checkbox'
		)
	);
	
	$wp_customize->add_control(
		'ct_white_social_enable', array(
			'label'	=>	__('Enable Social Icons in Header', 'ct-white'),
			'type'	=>	'checkbox',
			'section'	=>	'ct_white_social_section',
			'priority'	=>	5
		)
	);

	$social_networks = array( //Redefinied in Sanitization Function.
					'none' 		=> esc_html__('-','ct-white'),
					'facebook' 	=> esc_html__('Facebook', 'ct-white'),
					'twitter' 	=> esc_html__('Twitter', 'ct-white'),
					'instagram' => esc_html__('Instagram', 'ct-white'),
					'rss' 		=> esc_html__('RSS Feeds', 'ct-white'),
					'youtube' 	=> esc_html__('Youtube', 'ct-white'),
					'twitch' 	=> esc_html__('Twitch', 'ct-white'),
					'xing'		=> esc_html__('Xing', 'ct-white')
				);


    $social_count = count($social_networks);

	for ($s = 1 ; $s <= ($social_count - 3) ; $s++) :

		$wp_customize->add_setting(
			'ct_white_social_' . $s, array(
				'sanitize_callback' => 'ct_white_sanitize_social',
				'default' 			=> 'none',
			));

		$wp_customize->add_control( 'ct_white_social_' . $s, array(
					'settings' 	=> 'ct_white_social_' . $s,
					'label' 	=> esc_html__('Icon ','ct-white') . $s,
					'section' 	=> 'ct_white_social_section',
					'type' 		=> 'select',
					'choices' 	=> $social_networks,
		));

		$wp_customize->add_setting(
			'ct_white_social_url'.$s, array(
				'sanitize_callback' => 'esc_url_raw'
			));

		$wp_customize->add_control( 'ct_white_social_url' . $s, array(
			'label' 		=> esc_html__('Icon ','ct-white') . $s . esc_html__(' Url','ct-white'),
					'settings' 		=> 'ct_white_social_url' . $s,
					'section' 		=> 'ct_white_social_section',
					'type' 			=> 'url',
					'choices' 		=> $social_networks,
		));

	endfor;

	function ct_white_sanitize_social( $input ) {
		$social_networks = array(
					'none' ,
					'facebook',
					'twitter',
					'instagram',
					'rss',
					'youtube',
					'twitch',
					'xing'
				);
		if ( in_array($input, $social_networks) )
			return $input;
		else
			return '';
	}
}
add_action( 'customize_register', 'ct_white_customize_register' );

/**
 *	Sanitization of Checkbox
 */
 function ct_white_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ct_white_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ct_white_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ct_white_customize_preview_js() {
	wp_enqueue_script( 'ct-white-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), CT_WHITE_VERSION, true );
}
add_action( 'customize_preview_init', 'ct_white_customize_preview_js' );
