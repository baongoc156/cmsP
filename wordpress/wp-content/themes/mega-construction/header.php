<?php
/**
 * The Header for our theme.
 * @package Mega Construction
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  }?>
  
  <?php if(get_theme_mod('mega_construction_preloader',true)){ ?>
    <?php if(get_theme_mod( 'mega_construction_preloader_type','Square') == 'Square'){ ?>
      <div id="overlayer"></div>
      <span class="tg-loader">
        <span class="tg-loader-inner"></span>
      </span>
    <?php }else if(get_theme_mod( 'mega_construction_preloader_type') == 'Circle') {?>    
      <div class="preloader text-center">
        <div class="preloader-container">
          <span class="animated-preloader"></span>
        </div>
      </div>
    <?php }?>
  <?php }?>
  
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'mega-construction' ); ?></a>
    <div class="logo text-center p-1">
      <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
      <?php endif; ?>
      <?php $blog_info = get_bloginfo( 'name' ); ?>
      <?php if ( ! empty( $blog_info ) ) : ?>
        <?php if( get_theme_mod('mega_construction_show_site_title',true) != ''){ ?>
          <?php if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php else : ?>
            <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php endif; ?>
        <?php }?>
      <?php endif; ?>
      <?php if( get_theme_mod('mega_construction_show_tagline',true) != ''){ ?>
        <?php
        $description = get_bloginfo( 'description', 'display' );
        if ( $description || is_customize_preview() ) :
        ?>
          <p class="site-description m-0">
            <?php echo esc_html($description); ?>
          </p>
        <?php endif; ?>
      <?php }?>
    </div>  
    <?php get_template_part( 'template-parts/header/navigation' ); ?>   
  </header>

  <?php if(get_theme_mod('mega_construction_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>