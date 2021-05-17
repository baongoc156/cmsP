<?php
/**
 * Colors Settings
 *
 * @package clearnote
 */

$wp_customize->add_panel(
	'clearnote_color_panel',
	array(
		'priority' 			=> 45,
		'capability' 		=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'title' 			=> esc_html__( 'Color Scheme', 'clearnote' ),
		'description' 		=> '',
	)
);

$wp_customize->add_section(
	'clearnote_colors_settings',
	array(
		'panel' 	=> 'clearnote_color_panel',
		'priority'    => 10,
		'title'       => esc_html__( 'Site Colors', 'clearnote' ),
	)
);

// Primary Color
$wp_customize->add_setting(
	'clearnote_primary_color',
	array(
		'sanitize_callback'    => 'sanitize_hex_color_no_hash',
		'sanitize_js_callback' => 'maybe_hash_hex_color',
		'default'              => '1e73be',
	)
);
$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'clearnote_primary_color',
		array(
			'label'       => esc_html__( 'Primary Color', 'clearnote' ),
			'section'     => 'clearnote_colors_settings',
			'description' => '',
			'priority'    => 1,
		)
	)
);
