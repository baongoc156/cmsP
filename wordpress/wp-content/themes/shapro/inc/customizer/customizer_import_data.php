<?php
class shapro_import_dummy_data {

	private static $instance;

	public static function init( ) {
		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof shapro_import_dummy_data ) ) {
			self::$instance = new shapro_import_dummy_data;
			self::$instance->shapro_setup_actions();
		}

	}

	/**
	 * Setup the class props based on the config array.
	 */
	

	/**
	 * Setup the actions used for this class.
	 */
	public function shapro_setup_actions() {

		// Enqueue scripts
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'shapro_import_customize_scripts' ), 0 );

	}
	
	

	public function shapro_import_customize_scripts() {

	wp_enqueue_script( 'shapro-import-customizer-js', get_template_directory_uri() . '/assets/js/shapro-import-customizer.js', array( 'customize-controls' ) );
	}
}

$shapro_import_customizers = array(

		'import_data' => array(
			'recommended' => true,
			
		),
);
shapro_import_dummy_data::init( apply_filters( 'shapro_import_customizer', $shapro_import_customizers ) );