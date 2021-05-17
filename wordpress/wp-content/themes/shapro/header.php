<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapro
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
<div id="page" class="wrap">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapro' ); ?></a>
	<!--header-->
    <header class="trasparent">
      <!--topbar-->
      <?php do_action('shapro_header_layouts'); ?>
      <!--/topbar-->
      <!--navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="container"> 
          <div class="navbar-header"> 
        	       <?php
                    if(has_custom_logo())
                    { 
                      the_custom_logo();
                    }
                    ?>
                    <div class="site-branding-text">
                          <h1 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                          <p class="site-description"><?php bloginfo('description'); ?></p>
                    </div>
                  </div>
      	           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation','shapro');?>">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                   
					<div class="collapse navbar-collapse">
                	<?php wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'  => 'collapse navbar-collapse',
                'menu_class' => 'nav navbar-nav ml-auto',
                'fallback_cb' => 'shapro_fallback_page_menu',
                'walker' => new shapro_nav_walker()
              ) );
      ?></div>
        </div>
      </nav>
      <!--/navbar-->
    </header>
    <!--/header-->
