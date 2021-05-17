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
<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$audio = false;
	// Only get audio from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
	}
?>
<article class="blog-sec p-2 mb-4">
  <div class="mainimage">
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the audio file.
        if ( ! empty( $audio ) ) {
          foreach ( $audio as $audio_html ) {
            echo '<div class="entry-audio">';
              echo $audio_html;
            echo '</div><!-- .entry-audio -->';
          }
        };
      };
    ?>
  </div>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if(get_theme_mod('mega_construction_metafields_date',true)==1 || get_theme_mod('mega_construction_metafields_author',true)==1 || get_theme_mod('mega_construction_metafields_comment',true)==1){ ?>
    <div class="post-info py-2 mb-2">
      <?php if(get_theme_mod('mega_construction_metafields_date',true)==1){ ?>
        <i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date ml-1 mr-2"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
      <?php }?>
      <?php if(get_theme_mod('mega_construction_metafields_author',true)==1){ ?>
        <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author ml-1 mr-2"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
      <?php }?>
      <?php if(get_theme_mod('mega_construction_metafields_comment',true)==1){ ?>
        <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments ml-1 mr-2"> <?php comments_number( __('0 Comments','mega-construction'), __('0 Comments','mega-construction'), __('% Comments','mega-construction') ); ?></span> 
      <?php }?>
    </div>
  <?php }?>
  <?php if(has_post_thumbnail()) { ?>
    <div class="feature-box"> 
      <?php the_post_thumbnail(); ?>
    </div>
    <hr>          
  <?php } ?>
  <?php if(get_theme_mod('mega_construction_blog_post_content') == 'Full Content'){ ?>
    <?php the_content(); ?>
  <?php }
  if(get_theme_mod('mega_construction_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p class="m-0"><?php $excerpt = get_the_excerpt(); echo esc_html( mega_construction_string_limit_words( $excerpt, esc_attr(get_theme_mod('mega_construction_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('mega_construction_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
  <?php }?>
  <?php if ( get_theme_mod('mega_construction_blog_button_text','Read Full') != '' ) {?>
    <div class="blogbtn mt-3">
      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read Full', 'mega-construction' ); ?>"><?php echo esc_html( get_theme_mod('mega_construction_blog_button_text',__('Read Full', 'mega-construction')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('mega_construction_blog_button_text',__('Read Full', 'mega-construction')) ); ?></span></a>
    </div>
  <?php }?>
</article>