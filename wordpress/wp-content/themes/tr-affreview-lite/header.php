<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TR_Affreview_Lite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!-- ========== start of head section ========== -->
	<section id="head">
		<div class="menu">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#affreview-navbar-collapse" aria-expanded="false">
							<span class="sr-only"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
						 <?php
						    the_custom_logo();
						    if ( is_front_page() && is_home() ) : ?>
						        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						    <?php else : ?>
						        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						    <?php
						    endif;

						    $description = get_bloginfo( 'description', 'display' );

						    if ( $description || is_customize_preview() ) : ?>
						        <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						    <?php
						    endif; ?>
						</div>
					</div><!-- /.end of navbar-header -->

					<!-- Collect the nav links, forms, and other content for toggling -->
						<ul class="nav navbar-nav navbar-right">
						    <?php
			                wp_nav_menu( array(
			                    'menu'              => 'primarymenu',
			                    'theme_location'    => 'primarymenu',
			                    'container'         => 'div',
			                    'container_class'   => 'collapse navbar-collapse',
			                    'container_id'      => 'affreview-navbar-collapse',
			                    'menu_class'        => 'nav navbar-nav',
			                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			                    'walker'            => new WP_Bootstrap_Navwalker())
			                );
			                ?>
						                
						</ul>
						<!-- Modal -->
				</div><!-- /.end of container -->
			</nav><!-- /.end of navbar -->
		</div><!-- /.end of menu -->
	</section><!-- /#end of head section -->
