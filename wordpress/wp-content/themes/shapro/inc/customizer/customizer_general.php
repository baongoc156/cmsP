<?php
function shapro_gen_customizer_setting( $wp_customize ){
		 $wp_customize->add_panel(
		 'shapro_gen_setting',
			array(
				'priority'      => 30,
				'capability' =>'edit_theme_options',
				'title' => __('General','shapro'),
				)
		);

	/*Color*/ 
	$wp_customize->add_section(
        'colors',
        array(
        	'priority'      => 1,
            'title' 		=> __('Colors','shapro'),
			'panel'  		=> 'shapro_gen_setting',
		)
    );
}
add_action( 'customize_register', 'shapro_gen_customizer_setting' );