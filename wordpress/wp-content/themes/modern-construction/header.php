<?php
/**
 * The Header for our theme.
 * @package Modern Construction
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
  <div id="header" class="">
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'modern-construction' ); ?></a>
    <?php if (has_nav_menu('primary')){ ?>
      <div class="toggle-menu child-menu p-2 <?php if( get_theme_mod( 'mega_construction_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <button role="tab"><i class="fas fa-bars pr-2"></i><?php esc_html_e('Menu','modern-construction'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','modern-construction'); ?></span></button>
      </div>
    <?php }?>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-5">
          <div class="logo">
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
        </div>
        <div class="col-lg-9 col-md-7 p-0">
          <div class="menu-sec">
            <div class="container">
              <div class="row">
                <div class="menubox <?php if(get_theme_mod('mega_construction_show_search',true)) { ?>col-lg-10 col-md-10 col-8" <?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
                  <div id="sidelong-menu" class="nav side-nav">
                    <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'modern-construction' ); ?>">
                      <?php if (has_nav_menu('primary')){ 
                        wp_nav_menu( array( 
                          'theme_location' => 'primary',
                          'container_class' => 'main-menu-navigation clearfix' ,
                          'menu_class' => 'clearfix',
                          'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                          'fallback_cb' => 'wp_page_menu',
                        ) ); 
                      } ?>
                      <a href="javascript:void(0)" class="closebtn responsive-menu"><?php esc_html_e('Close Menu','modern-construction'); ?><i class="fas fa-times-circle m-3"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','modern-construction'); ?></span></a>
                    </nav>
                  </div>
                </div>
                <?php if(get_theme_mod('mega_construction_show_search',true) ){ ?>
                  <div class="search-box col-lg-2 col-md-2 col-4">
                    <div class="wrap"><?php get_search_form(); ?></div>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if(get_theme_mod('mega_construction_post_featured_image') == 'banner' ){
    if( is_singular() ) {?>
      <div id="page-site-header">
        <div class='page-header'> 
          <?php the_title( '<h1 class="text-center">', '</h1>' ); ?>
        </div>
      </div>
    <?php }
  }?>