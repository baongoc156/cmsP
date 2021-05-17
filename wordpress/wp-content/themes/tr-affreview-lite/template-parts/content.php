<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TR_Affreview_Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>"> 
	   <?php 
			if(has_post_thumbnail()){

		   		the_post_thumbnail( 'tr-photography-lite-thumbnail', array( 'class'=>'img-responsive' ) );

		    }
		?>
		</a>
		<div class="caption">
			<p class="author-text"><span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>  /</span>  <?php echo get_the_date(); ?> </p>

			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<?php the_content(); 
			  wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tr-affreview-lite' ),
				'after'  => '</div>',
			) ); ?>
			
		</div><!-- /.end of caption-->
	</div><!-- /.end of thumbnail -->
</article><!-- #post-<?php the_ID(); ?> -->

