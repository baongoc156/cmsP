<?php
/**
 * The template part for displaying services
 * @package Mega Construction
 * @subpackage mega_construction
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?> 
<div class="col-lg-4 col-md-4">
  <article class="blog-sec p-2 mb-4">
    <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
    <?php if(has_post_thumbnail()) { ?>
      <hr>
      <div class="mainimage"> 
        <?php the_post_thumbnail(); ?>
      </div>
      <hr>          
    <?php } ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p class="m-0"><?php $excerpt = get_the_excerpt(); echo esc_html( mega_construction_string_limit_words( $excerpt, esc_attr(get_theme_mod('mega_construction_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('mega_construction_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
    <?php if ( get_theme_mod('mega_construction_blog_button_text','Read Full') != '' ) {?>
      <div class="blogbtn mt-3">
        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read Full', 'mega-construction' ); ?>"><?php echo esc_html( get_theme_mod('mega_construction_blog_button_text',__('Read Full', 'mega-construction')) ); ?><span class="screen-reader-text"><<?php echo esc_html( get_theme_mod('mega_construction_blog_button_text',__('Read Full', 'mega-construction')) ); ?></span></a>
      </div>
    <?php }?>
  </article>
</div>