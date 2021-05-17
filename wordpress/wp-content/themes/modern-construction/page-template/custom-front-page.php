<?php
/**
 * Template Name: Custom home page
 */
get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action('mega_construction_above_slider_section'); ?>

  <?php if( get_theme_mod( 'mega_construction_slider_hide') != '') { ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('mega_construction_slider_speed',3000)); ?>"> 
      <?php $modern_construction_content_pages = array(); 
        for ( $count = 1; $count <= 4; $count++ ) {
          $mod = intval( get_theme_mod( 'mega_construction_slidersettings_page' . $count ));
          if ( 'page-none-selected' != $mod ) {
            $modern_construction_content_pages[] = $mod;
          }
        }
        if( !empty($modern_construction_content_pages) ) :
          $args = array(
              'post_type' => 'page',
              'post__in' => $modern_construction_content_pages,
              'orderby' => 'post__in'
          );
          
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1; $j = 1; 
            ?>     
            <div class="carousel-inner" role="listbox">
              <?php  while ( $query->have_posts() ) : $query->the_post();?>

              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php the_post_thumbnail();  ?>
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <?php if ( get_theme_mod('mega_construction_slider_title',true) != '' ) {?>
                      <h1><?php the_title(); ?></h1> 
                    <?php }?>  
                    <?php if ( get_theme_mod('mega_construction_slider_content',true) != '' ) {?>
                      <p><?php $excerpt = get_the_excerpt(); echo esc_html( mega_construction_string_limit_words( $excerpt, esc_attr(get_theme_mod('mega_construction_slider_excerpt_number','25')))); ?></p>
                    <?php }?>
                    <div class="read-btn mt-4">
                      <a href="<?php echo esc_url( get_permalink() );?>"><?php esc_html_e( 'READ MORE','modern-construction' ); ?><span class="screen-reader-text"><?php esc_html_e( 'READ MORE','modern-construction' ); ?></span></a>
                    </div>               
                  </div>
                </div>
              </div>
              <?php $i++; $j++; endwhile; 
              wp_reset_postdata();?>
            </div>
            <?php if( get_theme_mod('mega_construction_slider_indicator',true) != ''){ ?>
              <ol class="carousel-indicators">
                <?php for($i=0;$i<count($modern_construction_content_pages);$i++) { ?>
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
          <span class="screen-reader-text"><?php esc_html_e( 'Previous','modern-construction' ); ?></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
          <span class="screen-reader-text"><?php esc_html_e( 'Next','modern-construction' ); ?></span>
        </a>
      </div>  
      <div class="clearfix"></div>
    </section> 
  <?php }?>

  <?php do_action('mega_construction_above_contact_section'); ?>

  <?php if( get_theme_mod('mega_construction_address') != ''){ ?>
    <section id="contact-us">
      <div class="container"> 
        <div class="contact p-3">
          <div class="row">   
            <div class="col-lg-3 col-md-3 p-0">
              <?php if( get_theme_mod( 'mega_construction_address' ) != '') { ?>
              <div class="address px-2">
                <div class="row">
                  <div class="col-lg-2 col-md-2">
                    <i class="fas fa-map-marker px-2"></i>
                  </div>
                  <div class="col-lg-10 col-md-10">
                    <p class="diff-lay px-2"><?php echo esc_html( get_theme_mod('mega_construction_address','') ); ?></p>
                    <p class="diff-lay px-2"><?php echo esc_html( get_theme_mod('mega_construction_address1','') ); ?></p>
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
            <div class="col-lg-3 col-md-3 p-0">
              <?php if( get_theme_mod( 'mega_construction_phone' ) != '') { ?>
                <div class="call">
                  <div class="row">
                    <div class="col-lg-2 col-md-2">
                      <i class="fas fa-phone px-2"></i>
                    </div>
                    <div class="col-lg-10 col-md-10">
                      <p class="diff-lay px-2"><?php echo esc_html( get_theme_mod('mega_construction_phone','') ); ?></p>
                      <p class="diff-lay px-2"><a href="tel:<?php echo esc_attr( get_theme_mod('mega_construction_phone1','') ); ?>"><?php echo esc_html( get_theme_mod('mega_construction_phone1','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('mega_construction_phone1','') ); ?></span></a></p>
                    </div>
                  </div>
                </div>
              <?php }?>
            </div>  
            <div class="col-lg-3 col-md-3 p-0">
              <?php if( get_theme_mod( 'mega_construction_phone' ) != '') { ?>
              <div class="row m-0">
                <div class="col-lg-2 col-md-2">
                  <i class="fab fa-telegram-plane px-2"></i>
                </div>
                <div class="col-lg-10 col-md-10">
                  <p class="diff-lay px-2"><?php echo esc_html( get_theme_mod('mega_construction_email','') ); ?></p>
                  <p class="diff-lay px-2"><a href="mailto:<?php echo esc_attr( get_theme_mod('mega_construction_email1','') ); ?>"><?php echo esc_html( get_theme_mod('mega_construction_email1','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('mega_construction_email1','') ); ?></span></a></p>
                </div>
              </div>
              <?php }?>
            </div>  
            <div class="col-lg-3 col-md-3 p-0">
              <?php if( get_theme_mod( 'mega_construction_button_link','' ) != '') { ?>
                <div class="contactbtn text-center mt-md-0 mt-3">
                  <a href="<?php echo esc_url( get_theme_mod('mega_construction_button_link','' ) ); ?>" class="py-3 px-lg-4 px-md-3 px-4"><?php esc_html_e( 'SPECIAL OFFERS','modern-construction' ); ?><span class="screen-reader-text"><?php esc_html_e( 'SPECIAL OFFERS','modern-construction' ); ?></span></a>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php }?> 

  <?php do_action('mega_construction_below_about_section'); ?>

  <?php /*--About Us--*/?>
  <?php if( get_theme_mod( 'mega_construction_about_setting','' ) != '') { ?>
    <section class="about py-5">
      <div class="container">
        <?php
        $mega_construction_postData1 =  get_theme_mod('mega_construction_about_setting');
        if($mega_construction_postData1){
          $args = array( 'name' => esc_html($mega_construction_postData1 ,'modern-construction'));
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
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('VIEW MORE','modern-construction'); ?><i class="fas fa-long-arrow-alt-right p-2"></i><span class="screen-reader-text"><?php esc_html_e('VIEW MORE','modern-construction'); ?></span></a>
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

  <?php /*--Service section--*/?>
  <?php if( get_theme_mod('modern_construction_service_title') != ''){ ?>
    <section class="service py-5">
      <div class="container">
        <div class="row">
          <?php if( get_theme_mod('modern_construction_service_title') != ''){ ?>
          <div class="col-lg-6 col-md-6">
            <div class="service-content">
              <h3 class="pt-4 pb-0"><?php echo esc_html(get_theme_mod('modern_construction_service_title','')); ?></h3>
              <?php }?>
              <?php if( get_theme_mod('modern_construction_service_text') != ''){ ?>
                <div class="service-text">
                  <p><?php echo esc_html(get_theme_mod('modern_construction_service_text','')); ?></p>
                </div>
              <?php }?>
            </div>
            <div class="service-category"> 
              <div class="row">
                <?php 
                  $page_query = new WP_Query(array( 'category_name' => esc_html(get_theme_mod('modern_construction_category'),'modern-construction')));?>
                    <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                      <div class="col-lg-6 col-md-6">
                        <?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?>
                        <div class="category-content p-2 mb-3">
                          <h4 class="m-0 pt-0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h4>
                          <p><?php $excerpt = get_the_excerpt(); echo esc_html( mega_construction_string_limit_words( $excerpt,10 ) ); ?></p>
                        </div>
                      </div>
                    <?php endwhile;
                  wp_reset_postdata();
                ?>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <?php
              $args = array( 'name' => get_theme_mod('modern_construction_post',''));
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div class="video-post">
                    <?php
                      $content = apply_filters( 'the_content', get_the_content() );
                      $video = false;

                      // Only get video from the content if a playlist isn't present.
                      if ( false === strpos( $content, 'wp-playlist-script' ) ) {
                        $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
                      }
                    ?>
                    <?php
                      if ( ! is_single() ) {
                        // If not a single post, highlight the video file.
                        if ( ! empty( $video ) ) {
                          foreach ( $video as $video_html ) {
                            echo '<div class="entry-video">';
                              echo $video_html;
                            echo '</div>';
                          }
                        }
                        elseif(has_post_thumbnail()) { 
                          the_post_thumbnail(); 
                        } 
                      }; 
                    ?>
                  </div>
                <?php endwhile; 
                wp_reset_postdata();?>
              <?php else : ?>
                <div class="no-postfound"></div>
              <?php
            endif; ?>
          </div>
        </div>
      </div>
    </section>
  <?php }?> 

  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content"><?php the_content(); ?></div>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>

<?php get_footer(); ?>