<?php
/**
 * Template part for page title.
 *
 * @package Clearnote
 */

$blog_title_visible 	= get_theme_mod( 'clearnote_blog_title_visible', false );
$hero_title 			= get_theme_mod( 'clearnote_hero_title' );
$hero_desc 				= get_theme_mod( 'clearnote_hero_desc' );

do_action( 'clearnote_before_page_title' );

if ( is_home() && $blog_title_visible && ! empty( $hero_title ) ) : ?>
	
	<div class="container-fluid" role="banner">
		<div class="row justify-content-center hero-row">
			<div class="col-md-7 text-center">
				<h1 class="hero-title">
					<?php echo esc_html( $hero_title ); ?>
				</h1>
				<p class="hero-desc">
					<?php echo esc_html( $hero_desc ); ?>
				</p>
			</div>
		</div>
	</div>

<?php endif; ?>

<?php do_action( 'clearnote_after_page_title' ); ?>
