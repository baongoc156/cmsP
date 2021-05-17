<?php
function shapro_header_customizer_setting( $wp_customize ){
		 $wp_customize->add_panel(
		 'shapro_header_setting',
			array(
				'priority'      => 40,
				'capability' =>'edit_theme_options',
				'title' => __('Header','shapro'),
				)
		);

	/*--- Title Tagline ----*/ 
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','shapro'),
			'panel'  		=> 'shapro_header_setting',
		)
    );


    
		
	}
add_action( 'customize_register', 'shapro_header_customizer_setting' );