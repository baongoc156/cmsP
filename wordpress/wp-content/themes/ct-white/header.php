<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CT_White
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ct-white' ); ?></a>

	<header id="masthead" class="site-header container">
		<div id="ct-top-bar">
			<?php get_template_part('inc/social'); ?>
		</div>
		<div id="header-wrapper">
			<div class="site-branding">
				<?php
				the_custom_logo(); ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					
					<?php
				$ct_white_description = get_bloginfo( 'description', 'display' );
				if ( $ct_white_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $ct_white_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
			
			<button class="jump-to-field" tabindex="-1"></button>
			<button type="button" id="search-btn"><span class="dashicons dashicons-search"></span></button>
			
		</div>
		
		<?php ct_white_header_search_form(); ?>
		
		<?php
			if (is_front_page()) :
				the_header_image_tag();
			endif;
		?>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e('MENU', 'ct-white'); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'walker'		 =>	has_nav_menu('menu-1') ? new CT_White_Mobile_Menu : '',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<div id="content" class="container">
		<div class="row">
