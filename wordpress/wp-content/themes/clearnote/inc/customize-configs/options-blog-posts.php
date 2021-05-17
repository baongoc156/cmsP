<?php
/**
 * Blog Post Settings
 *
 * @package clearnote
 */

$wp_customize->add_panel(
	'clearnote_blog_panel',
	array(
		'priority' 			=> 90,
		'capability' 		=> 'edit_theme_options',
		'theme_supports' 	=> '',
		'title' 			=> esc_html__( 'Blog Settings', 'clearnote' ),
		'description' 		=> '',
	)
);

// Posts Page Title
$wp_customize->add_section(
	'clearnote_theme_options',
	array(
		'panel' 			=> 'clearnote_blog_panel',
		'priority' 			=> 10,
		'title' 			=> esc_html__( 'Blog Page Title', 'clearnote' ),
	)
);

$wp_customize->add_setting(
	'clearnote_blog_title_visible',
	array(
		'default'           => false,
		'sanitize_callback' => 'clearnote_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	'clearnote_blog_title_visible',
	array(
		'label' 			=> esc_html__( 'Enable Title', 'clearnote' ),
		'type' 				=> 'checkbox',
		'section' 			=> 'clearnote_theme_options',
		'setting' 			=> 'clearnote_blog_title_visible',
	)
);

$wp_customize->add_setting(
	'clearnote_hero_title',
	array(
		'default'           => '',
		'sanitize_callback' => 'wp_kses_post',
	)
);

$wp_customize->add_control(
	'clearnote_hero_title',
	array(
		'label' 			=> esc_html__( 'Section Title', 'clearnote' ),
		'type' 				=> 'text',
		'section' 			=> 'clearnote_theme_options',
		'setting' 			=> 'clearnote_hero_title',
		'active_callback' 	=> 'clearnote_cac_blog_title_visible',
	)
);

$wp_customize->add_setting(
	'clearnote_hero_desc',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'sanitize_textarea_field',
	)
);

$wp_customize->add_control(
	'clearnote_hero_desc',
	array(
		'label' 			=> esc_html__( 'Sub-title on Cover Section', 'clearnote' ),
		'type' 				=> 'textarea',
		'section' 			=> 'clearnote_theme_options',
		'setting' 			=> 'clearnote_hero_desc',
		'active_callback' 	=> 'clearnote_cac_blog_title_visible',
	)
);

// Blog Posts
$wp_customize->add_section(
	'clearnote_blog_posts',
	array(
		'panel' 			=> 'clearnote_blog_panel',
		'priority' 			=> null,
		'title' 			=> esc_html__( 'Blog Posts', 'clearnote' ),
		'description' 		=> '',
	)
);

$wp_customize->add_setting(
	'clearnote_blog_sidebar',
	array(
		'default' 			=> 'right-sidebar',
		'sanitize_callback' => 'clearnote_sanitize_select',
	)
);
$wp_customize->add_control(
	'clearnote_blog_sidebar',
	array(
		'label' 			=> esc_html__( 'Sidebar', 'clearnote' ),
		'type' 				=> 'select',
		'section' 			=> 'clearnote_blog_posts',
		'setting' 			=> 'clearnote_blog_sidebar',
		'choices' 			=> array(
			'left-sidebar' => esc_html__( 'Sidebar on left side', 'clearnote' ),
			'right-sidebar' => esc_html__( 'Sidebar on right side', 'clearnote' ),
			'none' => esc_html__( 'No sidebar', 'clearnote' ),
		),
	)
);

$wp_customize->add_setting(
	'blog_navigation_type',
	array(
		'default' 			=> 'navigation',
		'sanitize_callback' => 'clearnote_sanitize_select',
	)
);
$wp_customize->add_control(
	'blog_navigation_type',
	array(
		'label' 			=> esc_html__( 'Navigation Type', 'clearnote' ),
		'type' 				=> 'select',
		'section' 			=> 'clearnote_blog_posts',
		'setting' 			=> 'blog_navigation_type',
		'choices' 			=> array(
			'navigation' => esc_html__( 'Navigation', 'clearnote' ),
			'pagination' => esc_html__( 'Pagination', 'clearnote' ),
		),
	)
);
