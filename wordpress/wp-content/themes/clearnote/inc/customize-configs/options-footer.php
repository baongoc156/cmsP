<?php
/**
 * Single Post Settings
 *
 * @package clearnote
 */

$wp_customize->add_panel( 'clearnote_footer_panel',
	array(
		'priority' 			=> 90,
		'capability' 		=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'title' 			=> esc_html__( 'Footer', 'clearnote' ),
		'description' 		=> '',
	)
);

// Footer Widgets Settings
$wp_customize->add_section( 'clearnote_footer',
	array(
		'priority'    => null,
		'title'       => esc_html__( 'Footer Widgets', 'clearnote' ),
		'description' => '',
		'panel'       => 'clearnote_footer_panel',
	)
);

$wp_customize->add_setting( 'footer_layout',
	array(
		'sanitize_callback' => 'clearnote_sanitize_select',
		'default'           => '',
		'transport'         => 'postMessage',
	)
);

$wp_customize->add_control( 'footer_layout',
	array(
		'type'        => 'select',
		'label'       => esc_html__( 'Layout', 'clearnote' ),
		'section'     => 'clearnote_footer',
		'default'     => '0',
		'description' => esc_html__( 'Number footer columns to display.', 'clearnote' ),
		'choices'     => array(
			'4' => 4,
			'3' => 3,
			'2' => 2,
			'1' => 1,
			'0' => esc_html__( 'Disable footer widgets', 'clearnote' ),
		)
	)
);

for ( $i = 1; $i <= 4; $i ++ ) {
	$df = 12;
	if ( $i > 1 ) {
		$_n = 12 / $i;
		$df = array();
		for ( $j = 0; $j < $i; $j ++ ) {
			$df[ $j ] = $_n;
		}
		$df = join( '+', $df );
	}
	$wp_customize->add_setting( 'footer_custom_' . $i . '_columns',
		array(
			'sanitize_callback' => 'clearnote_sanitize_select',
			'default'           => $df,
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control( 'footer_custom_' . $i . '_columns',
		array(
			'label'       => $i == 1 ? __( 'Custom footer 1 column width', 'clearnote' ) : sprintf( __( 'Custom footer %s columns width', 'clearnote' ), $i ),
			'section'     => 'clearnote_footer',
			'description' => esc_html__( 'Enter int numbers and sum of them must smaller or equal 12, separated by "+"', 'clearnote' ),
		)
	);
}

// clearnote_sanitize_color_alpha
$wp_customize->add_setting( 'footer_widgets_color',
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'           => '',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_widgets_color',
		array(
			'label'   => esc_html__( 'Text Color', 'clearnote' ),
			'section' => 'clearnote_footer',
		)
	)
);

$wp_customize->add_setting( 'footer_widgets_bg_color',
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'           => '',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_widgets_bg_color',
		array(
			'label'   => esc_html__( 'Background Color', 'clearnote' ),
			'section' => 'clearnote_footer',
		)
	)
);

// Footer Heading color
$wp_customize->add_setting( 'footer_widgets_title_color',
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'           => '',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_widgets_title_color',
		array(
			'label'   => esc_html__( 'Widget Title Color', 'clearnote' ),
			'section' => 'clearnote_footer',
		)
	)
);


$wp_customize->add_setting( 'footer_widgets_link_color',
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'           => '',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_widgets_link_color',
		array(
			'label'   => esc_html__( 'Link Color', 'clearnote' ),
			'section' => 'clearnote_footer',
		)
	)
);

$wp_customize->add_setting( 'footer_widgets_link_hover_color',
	array(
		'sanitize_callback' => 'sanitize_hex_color',
		'default'           => '',
	)
);
$wp_customize->add_control( new WP_Customize_Color_Control(
		$wp_customize,
		'footer_widgets_link_hover_color',
		array(
			'label'   => esc_html__( 'Link Hover Color', 'clearnote' ),
			'section' => 'clearnote_footer',
		)
	)
);


/* Footer Copyright Settings
----------------------------------------------------------------------*/
$wp_customize->add_section( 'clearnote_footer_copyright',
	array(
		'priority'    => null,
		'title'       => esc_html__( 'Footer Copyright', 'clearnote' ),
		'description' => '',
		'panel'       => 'clearnote_footer_panel',
	)
);

// Copyright Text
$wp_customize->add_setting(	'clearnote_footer_copyright_text', array(
		'sanitize_callback' => 'sanitize_textarea_field',
		'default' 			=> clearnote_get_default_footer_copyright(),
	)
);

$wp_customize->add_control(
	'clearnote_footer_copyright_text',
	array(
		'label' 			=> esc_html__( 'Copyright Text', 'clearnote' ),
		'type' 				=> 'textarea',
		'section' 			=> 'clearnote_footer_copyright',
		'setting' 			=> 'clearnote_footer_copyright_text',
	)
);

// Footer Widgets Color
$wp_customize->add_setting( 'clearnote_footer_info_bg', array(
	'sanitize_callback'    => 'sanitize_hex_color',
	'sanitize_js_callback' => 'maybe_hash_hex_color',
	'default'              => '',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clearnote_footer_info_bg',
	array(
		'label' 			=> esc_html__( 'Background', 'clearnote' ),
		'section' 			=> 'clearnote_footer_copyright',
		'description' 		=> '',
	)
) );

// Footer Widgets Color
$wp_customize->add_setting( 'clearnote_footer_c_color', array(
	'sanitize_callback'    => 'sanitize_hex_color',
	'sanitize_js_callback' => 'maybe_hash_hex_color',
	'default'              => '',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clearnote_footer_c_color',
	array(
		'label'       => esc_html__( 'Text Color', 'clearnote' ),
		'section'     => 'clearnote_footer_copyright',
		'description' => '',
	)
) );

$wp_customize->add_setting( 'clearnote_footer_c_link_color', array(
	'sanitize_callback'    => 'sanitize_hex_color',
	'sanitize_js_callback' => 'maybe_hash_hex_color',
	'default'              => '',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clearnote_footer_c_link_color',
	array(
		'label'       => esc_html__( 'Link Color', 'clearnote' ),
		'section'     => 'clearnote_footer_copyright',
		'description' => '',
	)
) );

$wp_customize->add_setting( 'clearnote_footer_c_link_hover_color', array(
	'sanitize_callback'    => 'sanitize_hex_color',
	'sanitize_js_callback' => 'maybe_hash_hex_color',
	'default'              => '',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clearnote_footer_c_link_hover_color',
	array(
		'label'       => esc_html__( 'Link Hover Color', 'clearnote' ),
		'section'     => 'clearnote_footer_copyright',
		'description' => '',
	)
) );