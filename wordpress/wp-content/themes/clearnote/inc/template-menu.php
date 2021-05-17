<?php
/**
 * Menu Template Functions.
 *
 * @package Clearnote
 */

/**
 * Show main menu.
 *
 * @since  1.0.0
 * @param  string $mode Default or vertical.
 * @return void
 */
function clearnote_main_menu( $mode = 'default' ) {

	$classes[] = 'main-navigation';

	$classes[] = 'main-navigation__' . esc_attr( $mode );

	?>
	<nav id="site-navigation" class="<?php echo join( ' ', $classes ); ?>" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
		<div class="main-navigation-inner">
		<?php
			$args = apply_filters( 'clearnote-theme/menu/main-menu-args', array(
				'theme_location'   => 'main',
				'container'        => '',
				'menu_id'          => 'main-menu',
				
			) );

			wp_nav_menu( $args );
		?>
		</div>
	</nav><!-- #site-navigation -->
	<?php
}

/**
 * Get social nav menu.
 *
 * @since  1.0.0
 * @since  1.0.1  Added arguments to the filter.
 * @param  string $context Current post context - 'single' or 'loop'.
 * @param  string $type    Content type - icon, text or both.
 * @return string
 */
function clearnote_get_social_list( $context, $type = 'icon' ) {
	static $instance = 0;
	$instance++;

	$container_class = array( 'social-list' );

	if ( ! empty( $context ) ) {
		$container_class[] = sprintf( 'social-list--%s', sanitize_html_class( $context ) );
	}

	$container_class[] = sprintf( 'social-list--%s', sanitize_html_class( $type ) );

	$args = apply_filters( 'clearnote-theme/social/list-args', array(
		'theme_location'   => 'social',
		'container'        => 'div',
		'container_class'  => join( ' ', $container_class ),
		'menu_id'          => "social-list-{$instance}",
		'menu_class'       => 'social-list__items inline-list',
		'depth'            => 1,
		'link_before'      => ( 'icon' == $type ) ? '<span class="screen-reader-text">' : '',
		'link_after'       => ( 'icon' == $type ) ? '</span>' : '',
		'echo'             => false,
		'fallback_cb'      => 'clearnote_set_nav_menu',
		'fallback_message' => esc_html__( 'Set social menu', 'clearnote' ),
	), $context, $type );

	return wp_nav_menu( $args );
}

/**
 * Set callback function for nav menu.
 *
 * @param  array $args Nav menu arguments.
 * @return void
 */
function clearnote_set_nav_menu( $args ) {

	if ( ! current_user_can( 'edit_theme_options' ) ) {
		return null;
	}

	$label  = esc_attr( $args['fallback_message'] );
	$url    = esc_url( admin_url( 'nav-menus.php' ) );

	printf( '<div class="set-menu %3$s"><a href="%2$s" target="_blank" class="set-menu_link">%1$s</a></div>', esc_attr( $label ), esc_url( $url ), esc_attr( $args['container_class'] ) );
}
