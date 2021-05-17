<?php
/**
 *	Block Styles for Block Editor
 */
 function ct_white_block_style() {
	 
	 wp_register_style('ct-white-block-style', esc_url( get_template_directory_uri() . '/assets/css/block-styles.css'), array(), CT_WHITE_VERSION );
	 
	 register_block_style(
		'core/button',
		array(
			'name'			=>	'ct-white-btn',
			'label'			=>	__('CT-White Button', 'ct-white'),
			'style_handle'	=>	'ct-white-block-style'
		)
	);
 }
 add_action( 'init', 'ct_white_block_style' );