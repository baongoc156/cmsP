<?php
/**
 * The template part for displaying single post
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
<article>
	<div class="title_post">
		<h1><?php the_title(); ?></h1>
		<?php if(get_theme_mod('mega_construction_single_post_date',true)==1 || get_theme_mod('mega_construction_single_post_author',true)==1 || get_theme_mod('mega_construction_single_post_comment_no',true)==1){ ?>
			<div class="post-info py-2 mb-2">
	      		<?php if(get_theme_mod('mega_construction_single_post_date',true)==1){ ?>
			        <i class="fa fa-calendar" aria-hidden="true"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date ml-1 mr-2"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
			    <?php }?>
	      		<?php if(get_theme_mod('mega_construction_single_post_author',true)==1){ ?>
			        <i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author ml-1 mr-2"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
			    <?php }?>
	     		<?php if(get_theme_mod('mega_construction_single_post_comment_no',true)==1){ ?>
			        <i class="fa fa-comments" aria-hidden="true"></i><span class="entry-comments ml-1 mr-2"> <?php comments_number( __('0 Comments','mega-construction'), __('0 Comments','mega-construction'), __('% Comments','mega-construction') ); ?></span> 
			    <?php }?>
			</div>
		<?php }?>
		<?php if( get_theme_mod( 'mega_construction_single_post_image',true) != '' && get_theme_mod('mega_construction_post_featured_image','in-content') == 'in-content') { ?>
			<?php if(has_post_thumbnail()) { ?>
				<hr>
				<div class="feature-box">	
					<?php the_post_thumbnail(); ?>
				</div>
				<hr>					
			<?php } ?>
		<?php }?>
		<div class="entry-content"><?php the_content(); ?></div>
		<?php  wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'mega-construction' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'mega-construction' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
			
		if ( is_singular( 'attachment' ) ) {
			// Parent post navigation.
			the_post_navigation( array(
				'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'mega-construction' ),
			) );
		} 	elseif ( is_singular( 'post' ) ) {
			if( get_theme_mod( 'mega_construction_single_post_nav',true) != '') {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('mega_construction_single_post_next_nav_text',__('Next','mega-construction' )) )  . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'mega-construction' ) . '</span> ' .
						'',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html(get_theme_mod('mega_construction_single_post_prev_nav_text',__('Previous','mega-construction' )) ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'mega-construction' ) . '</span> ' .
						'',
				) );
			}
		}

		echo '<div class="clearfix"></div>'; ?>

		<?php if(get_theme_mod('mega_construction_post_tag',true) !=  ''){ ?>
			<div class="tags mt-3">
				<?php
		        if( $tags = get_the_tags() ) {
		          foreach( $tags as $content_tag ) {
		            $sep = ( $content_tag === end( $tags ) ) ? '' : ' ';
		            echo '<a href="' . esc_url(get_term_link( $content_tag, $content_tag->taxonomy )) . '" class="py-1 px-2 mr-2 mb-2"><i class="fas fa-tag mr-1"></i>' . esc_html($content_tag->name) . '</a>' . esc_html($sep);
		            }
		        } ?>
			</div> 
		<?php }?>

		<?php
		if( get_theme_mod( 'mega_construction_single_post_comment',true) != '') {
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}?>
	</div>
</article>

<?php if (get_theme_mod('mega_construction_related_posts',true) != '') {
	get_template_part( 'template-parts/related-post' );
}