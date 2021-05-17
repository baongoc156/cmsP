<?php
/* Notifications in customizer */
require get_template_directory() . '/inc/customizer-notify/shapro-customizer-notify.php';
$shapro_config_customizer = array(
	'recommended_plugins'       => array(
		'pluglab' => array(
			'recommended' => true,
			'description' => sprintf(__('Install and activate <strong>Pluglab</strong> plugin for set Homepage section and theme feature', 'shapro')),
		),
	),
	'recommended_actions'       => array(),
	'recommended_actions_title' => esc_html__( 'Recommended Actions', 'shapro' ),
	'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'shapro' ),
	'install_button_label'      => esc_html__( 'Install and Activate', 'shapro' ),
	'activate_button_label'     => esc_html__( 'Activate', 'shapro' ),
	'shapro_deactivate_button_label'   => esc_html__( 'Deactivate', 'shapro' ),
);
Shapro_Customizer_Notify::init( apply_filters( 'shapro_customizer_notify_array', $shapro_config_customizer ) );
?>