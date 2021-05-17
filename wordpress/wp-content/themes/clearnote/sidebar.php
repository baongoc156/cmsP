<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clearnote
 */

$sidebar_position = get_theme_mod( 'clearnote_blog_sidebar', 'right-sidebar' );

if ( is_active_sidebar( 'sidebar-1' ) && 'none' !== $sidebar_position ) : ?>
	<aside id="secondary" <?php clearnote_secondary_content_class( 'widget-area' ); ?>>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- #secondary -->
<?php endif; 
