<?php
/**
 * Template part for posts navigation.
 *
 * @package Clearnote
 */

$navigation_type 	= get_theme_mod( 'blog_navigation_type', 'navigation' );
$arrow_right 		= '&#8594 ';
$arrow_left 		= '&#8592 ';
$prev_icon 			= ! is_rtl() ? $arrow_left : $arrow_right;
$next_icon 			= ! is_rtl() ? $arrow_right : $arrow_left;

do_action( 'clearnote_before_posts_navigation' );

switch ( $navigation_type ) {
	case 'navigation':

		the_posts_navigation(
			apply_filters( 'clearnote_the_posts_navigation_args',
				array(
					'prev_text' => sprintf( '%2$s%1$s',
						esc_html__( 'Older Posts', 'clearnote' ),
						$prev_icon
					),
					'next_text' => sprintf( '%1$s%2$s',
						esc_html__( 'Newer Posts', 'clearnote' ),
						$next_icon
					),
				)
			)
		);
		break;

	case 'pagination':

		the_posts_pagination(
			apply_filters( 'clearnote_the_posts_pagination_args',
				array(
					'prev_text' => sprintf( '%2$s%1$s',
						esc_html__( 'Prev Page', 'clearnote' ),
						$prev_icon
					),
					'next_text' => sprintf( '%1$s%2$s',
						esc_html__( 'Next Page', 'clearnote' ),
						$next_icon
					),
				)
			)
		);
		break;
}

do_action( 'clearnote_after_posts_navigation' );
