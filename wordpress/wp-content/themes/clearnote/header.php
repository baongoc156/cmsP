<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clearnote
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'clearnote' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-xs-9 col-md-4">
					<!-- <div class="site-branding"><?php
						// clearnote_header_logo();
					?></div> -->
				</div>
				<div class="col-xs-3 col-md-8 text-right">
					<?php clearnote_main_menu(); ?>
				</div>
			</div>
		</div>
		<!-- <?php clearnote_set_header_image(); ?> -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
