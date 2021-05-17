<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<?php do_action('mega_construction_above_contact_section'); ?>

  <?php if( get_theme_mod( 'mega_construction_slider_hide') != '') { ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('mega_construction_slider_speed',3000)); ?>"> 
        <?php $mega_construction_content_pages = array(); 
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'mega_construction_slidersettings_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $mega_construction_content_pages[] = $mod;
            }
          }
          if( !empty($mega_construction_content_pages) ) :
            $args = array(
                'post_type' => 'page',
                'post__in' => $mega_construction_content_pages,
                'orderby' => 'post__in'
            );
            
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) :
              $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post();?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a>
            <div class="carousel-caption pb-0">
              <div class="inner_carousel">
                <?php if ( get_theme_mod('mega_construction_slider_title',true) != '' ) {?>
                  <h1><?php the_title(); ?></h1> 
                <?php }?> 
                <?php if ( get_theme_mod('mega_construction_slider_content',true) != '' ) {?>
                  <p class="px-4"><?php $excerpt = get_the_excerpt(); echo esc_html( mega_construction_string_limit_words( $excerpt, esc_attr(get_theme_mod('mega_construction_slider_excerpt_number','25')))); ?></p>
                <?php }?>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php if( get_theme_mod('mega_construction_slider_indicator',true) != ''){ ?>
          <ol class="carousel-indicators">
            <?php for($i=0;$i<count($mega_construction_content_pages);$i++) { ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo esc_attr($i); ?>" <?php if($i==0) { ?>class="active"<?php } ?>></li>
            <?php } ?>
          </ol>
        <?php }?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Previous', 'mega-construction' ); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next', 'mega-construction' ); ?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <div class="header-nav">
    <div id="header">
      <div class="menu-sec <?php if( get_theme_mod( 'mega_construction_sticky_header') != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
        <div class="container">
          <div class="row">
            <div class="menubox <?php if(get_theme_mod('mega_construction_show_search',true)) { ?>col-lg-10 col-md-10 col-8" <?php } else { ?>col-lg-12 col-md-12 <?php } ?>">
              <?php if (has_nav_menu('primary')){ ?>
                <div id="sidelong-menu" class="nav side-nav">
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
  </div>

  <?php if( get_theme_mod( 'mega_construction_address' ) != '' ||  get_theme_mod( 'mega_construction_address1' ) != '' ||  get_theme_mod( 'mega_construction_phone' ) != '' ||  get_theme_mod( 'mega_construction_phone1' ) != '' ||  get_theme_mod( 'mega_construction_email' ) != '' ||  get_theme_mod( 'mega_construction_email1' ) != '' || get_theme_mod( 'mega_construction_button_link' ) != '' ) { ?>
    <section id="contact-us" class="py-3 text-md-left text-center">
      <div class="container"> 
        <div class="row">   
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'mega_construction_address' ) != '') { ?>
            <div class="row">
              <div class="col-lg-2 col-md-12">
                <i class="fas fa-map-marker"></i>
              </div>
              <div class="col-lg-10 col-md-12">
                <p><?php echo esc_html( get_theme_mod('mega_construction_address','') ); ?></p>
                <p><?php echo esc_html( get_theme_mod('mega_construction_address1','') ); ?></p>
              </div>
            </div>
            <?php }?>
          </div>
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'mega_construction_phone' ) != '') { ?>
            <div class="phone pl-md-3 pl-0 my-md-0 my-2">
              <div class="row">
                <div class="col-lg-2 col-md-12">
                  <i class="fas fa-phone"></i>
                </div>
                <div class="col-lg-10 col-md-12">
                  <p><a href="tel:<?php echo esc_attr( get_theme_mod( 'mega_construction_phone','' ) ); ?>"><?php echo esc_html( get_theme_mod('mega_construction_phone','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('mega_construction_phone','' )); ?></span></a></p>
                  <p><a href="tel:<?php echo esc_attr( get_theme_mod( 'mega_construction_phone1','' ) ); ?>"><?php echo esc_html( get_theme_mod('mega_construction_phone1','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('mega_construction_phone1','' )); ?></span></a></p>
                </div>
              </div>
            </div>
            <?php }?>
          </div>   
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'mega_construction_phone' ) != '') { ?>
            <div class="row">
              <div class="col-lg-2 col-md-12">
                <i class="fab fa-telegram-plane"></i>
              </div>
              <div class="col-lg-10 col-md-12">
                <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'mega_construction_email','' ) ); ?>"><?php echo esc_html( get_theme_mod('mega_construction_email','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('mega_construction_email','' )); ?></span></a></p>
                <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'mega_construction_email1','' ) ); ?>"><?php echo esc_html( get_theme_mod('mega_construction_email1','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('mega_construction_email1','' )); ?></span></a></p>
              </div>
            </div>
            <?php }?>
          </div>    
          <?php if( get_theme_mod( 'mega_construction_button_link','' ) != '') { ?>
            <div class="col-lg-3 col-md-3">
              <div class="contactbtn text-center mt-md-0 mt-3">
                <a href="<?php echo esc_url( get_theme_mod('mega_construction_button_link','' ) ); ?>" class="py-3 px-lg-4 px-md-3 px-4"><?php esc_html_e( 'SPECIAL OFFERS','mega-construction' ); ?><span class="screen-reader-text"><?php esc_html_e( 'SPECIAL OFFERS','mega-construction' ); ?></span></a>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </section>
  <?php }?>

<main id="maincontent" role="main">
  <?php do_action('mega_construction_below_about_section'); ?>

  <?php if( get_theme_mod( 'mega_construction_about_setting','' ) != '') { ?>
    <section class="about py-5">
      <div class="container">
        <?php
        $mega_construction_postData1 =  get_theme_mod('mega_construction_about_setting');
        if($mega_construction_postData1){
          $args = array( 'name' => esc_html($mega_construction_postData1 ,'mega-construction'));
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="row">
                <div class="col-lg-8 col-md-7">
                  <div class="abt-image">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
                <div class="col-lg-4 col-md-5">
                  <?php if( get_theme_mod('mega_construction_sec1_title') != ''){ ?>     
                    <h2 class="text-right pt-4"><?php echo esc_html(get_theme_mod('mega_construction_sec1_title','')); ?></h2>
                  <?php }?>
                  <div class="textbox py-3 px-4">
                    <h3 class="p-0"><?php the_title(); ?></h3>
                    <p class="my-2"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('VIEW MORE','mega-construction'); ?><i class="fas fa-long-arrow-alt-right p-2"></i><span class="screen-reader-text"><?php esc_html_e('VIEW MORE','mega-construction'); ?></span></a>
                  </div>
                </div> 
              </div>         
            <?php endwhile; 
            wp_reset_postdata();?>
            <?php else : ?>
              <div class="no-postfound"></div>
            <?php
        endif; } ?>
      </div>
    </section>
  <?php }?>

  <?php do_action('mega_construction_after_about_section'); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>