<?php
/**
 * Header Navigation File
 *
 * @package Mega Construction
 */
?>

<div id="header">
  <div class="menu-sec <?php if( get_theme_mod( 'mega_construction_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
    <div class="container">
      <div class="row">
        <div class="menubox <?php if(get_theme_mod('mega_construction_show_search',true)) { ?>col-lg-10 col-md-10 col-8" <?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
          <?php if (has_nav_menu('primary')){ ?>
            <div class="toggle-menu responsive-menu p-2">
              <button role="tab"><i class="fas fa-bars mr-2"></i><?php esc_html_e('Menu','mega-construction'); ?><span class="screen-reader-text"><?php esc_html_e('Menu','mega-construction'); ?></span></button>
            </div>
            <div id="sidelong-menu" class="nav side-nav mobile-sidenav">
              <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'mega-construction' ); ?>">
                <?php 
                  wp_nav_menu( array( 
                    'theme_location' => 'primary',
                    'container_class' => 'main-menu-navigation clearfix' ,
                    'menu_class' => 'clearfix',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                    'fallback_cb' => 'wp_page_menu',
                  ) ); 
                ?>
                <a href="javascript:void(0)" class="closebtn responsive-menu"><?php esc_html_e('Close Menu','mega-construction'); ?><i class="fas fa-times-circle m-3"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','mega-construction'); ?></span></a>
              </nav>
            </div>
          <?php }?>
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